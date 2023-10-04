<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $json = file_get_contents('php://input');
    $data = json_decode($json);

    if (isset($data->input_code)) {
        $input_code = $data->input_code;

        $status = false;
        if ( validateCode($input_code) ){
            $status = true;
        }

        $respuesta = array(
            'valid' => $status
        );
        echo json_encode($respuesta);
    }
} else {
    echo 'Método no permitido';
}

function validateCode($code) {

    $partes = explode('$10$', $code);
    if (count($partes) != 2){
        return false;
    }

    $algorithmTimeStamp = $partes[0];
    $hash = $partes[1];

    $getTimestamp = str_replace("$2y", "", $algorithmTimeStamp);
    $getOriginalPass = "$2y$10$".$hash;

    $timestampActual = time();
    return $timestampActual <= ((int)$getTimestamp + 60) && password_verify('Challenge1', $getOriginalPass);
}


?>
