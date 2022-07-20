<?php
include "../config/dbConfig.php";
$usuario=$_POST['usuario'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$genero=$_POST['genero'];
$edad=$_POST['edad'];
$terminos=$_POST['terminos'];




$insert=mysqli_query(conectar(),"INSERT INTO usuario (`usuario`, `correo`, `contrasena`, `comida_favorita`, `edad`, `terminos`, `fecha_hroa`) 
VALUES ('$usuario','$correo','$contraseña','$genero','$edad','$terminos',now())");
if($insert){
    echo "<script>Swal.fire({
        text:'Usuario registrado con exito',
        icon:'success',
        confirmButtonColor: '#000000'

    })</script>";
}else{
    echo "<div class='alert alert-danger'>Ha ocurrido un error en el registro, por favor intentelo nuevamente.</div>";
}







?>