<?php
/*
pista1 =>[ROT1]=> qjtub1
*/

//TOUPDATE: Los links deben ser diferentes
$base_url  = "http://10.121.124.203:1314/get_code.php";
$mensaje = "Para obtener el código de invitación debes hacer un request de tipo POST al link";

$response = [
    "el_mensaje" => "knil la TSOP opit ed tseuqer nu recah sebed nóicativni ed ogidóc le renetbo araP",
    "link" => 'http://10.121.124.203:1314/get_code.php'
];

header("Content-Type: application/json");
echo json_encode($response);

?>