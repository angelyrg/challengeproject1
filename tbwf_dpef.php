<?php
/*
save_code =>[ROT1]=> tbwf_dpef
*/
date_default_timezone_set('America/Lima');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $json = file_get_contents('php://input');
    $data = json_decode($json);

    if (isset($data->c)) {
        $input_code = $data->c;
        $ip = $data->a;

        $resultadoInfo = '';

        $api_link = 'https://api.ipgeolocation.io/ipgeo?apiKey=ce9bf2d48a19475ab7276d0c0c976fc2&ip='.$ip;
        $ch = curl_init($api_link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        if ($response === false) {
            echo "cURL Error: " . curl_error($ch);
        } else {
            $data = json_decode($response, true);

            $result = [
                'ip' => $data['ip'],
                'country_name' => $data['country_name'],
                'city' => $data['city'],
                'lat' => $data['latitude'],
                'lng' => $data['longitude'],
                'isp' => $data['isp'],
                'organization' => $data['organization'],
                'time_zone' => $data['time_zone']['name'],
            ];

            $resultadoInfo = json_encode($result);
        }
        curl_close($ch);


        //TOUPDATE: Los datos de conección deben ser diferentes
        $link = mysqli_connect('localhost', 'root', '', 'web_sistemasunh');

        if (!$link) {
            die('Could not connect: ');
        }
        
        $query = "INSERT INTO challenge (code, cus_info) VALUES ('$input_code', '$resultadoInfo')";

        if (mysqli_query($link, $query)){
            setcookie("solved_time", time() + 3600);
        }
        mysqli_close($link);

        
    }else{
        echo "No data setted";
    }
}else{
    echo "Method no allowed";
}



?>