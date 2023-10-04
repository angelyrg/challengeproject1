<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $response = [
        "mensaje" => "¡Código generado! El siguiente código es válido por 1 minuto.",
        "validation_code" => generateCode()
    ];
    
    header("Content-Type: application/json");
    echo json_encode($response);

} else {
    echo '¿Estás seguro que has leído el_mensaje?';
}

function generateCode() {
    $hash_code = password_hash("Challenge1", PASSWORD_DEFAULT);

    $partes = explode('$10$', $hash_code);

    $algorithm = $partes[0];
    $hash = $partes[1];
    $timestamp = time();

    $finalCode = $algorithm.$timestamp."$10$".$hash;
    return $finalCode;
}

?>
