<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $json = file_get_contents('php://input');
    $data = json_decode($json);

    if (isset($data->input_code)) {
        $input_code = $data->input_code;

        $status = false;
        if ($input_code == '14159126'){
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
?>
