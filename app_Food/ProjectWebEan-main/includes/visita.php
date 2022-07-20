<?php
include("../config/dbConfig.php");
            
$latitud=$_POST['latitud'];
$longitud=$_POST['longitud'];

function visita($latitud,$longitud){
    
    $disp='iPhone';
    $query=mysqli_query(conectar(),"INSERT INTO visitas (dispositivo,longitud,latitud) VALUES ('$disp','$longitud','$latitud')");
}

visita($latitud,$longitud);
?>