<?php 

include "dbConfig.php";
date_default_timezone_set('America/Bogota');

$ip = $_SERVER['REMOTE_ADDR'];

$sqlConsultar = $con->query("SELECT * FROM contador WHERE ip = '$ip' ORDER BY id desc");
$contarConsultar = $sqlConsultar->num_rows;

if($contarConsultar == 0){
    $sqlInsertar = $con->query("INSERT INTO contador (ip, fecha) VALUES ('$ip', now())");
    
}else{
    $row = $sqlConsultar->fetch_array();
    $fechaRegistro = $row['fecha'];
    $fechaActual = date("Y-m-d H:i:s");
    $nuevaFecha = strtotime($fechaRegistro. "+ 1 hour");
    $nuevaFecha = date("Y-m-d H:i:s", $nuevaFecha);
    
    if($fechaActual > $nuevaFecha){
        $sqlInsertar = $con->query("INSERT INTO contador (ip, fecha) VALUES ('$ip', now())");
}
}

$visitas = $con->query("SELECT * FROM contador");
$contarVisitas = $visitas->num_rows;

echo $contarVisitas;

?>