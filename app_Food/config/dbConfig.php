<?php


function conectar(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "powering_food";
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: ".mysqli_error());
    //mysql_select_db($dbname,$conn);

    return $conn;
    
}

/*
$conexion = mysqli_connect("localhost:8111", "root", "", "powering_food");
mysqli_set_charset($conexion,"utf8");
*/
    
?>