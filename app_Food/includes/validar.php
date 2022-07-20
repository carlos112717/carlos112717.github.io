<?php
session_start();
include "../config/dbConfig.php";
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];




$select=mysqli_query(conectar(),"SELECT * FROM usuario where correo='$correo'");
$row_select=mysqli_fetch_assoc($select);


if(mysqli_num_rows($select)>0){


if($row_select['contrasena'] == $contraseña){

 echo "<script>Swal.fire({
        text:'Bienvenido',
        icon:'success',
        confirmButtonColor: '#000000'

    })
    
    window.location.replace('./');
    </script>";

    $_SESSION['usuario']=$row_select['usuario'];
    $_SESSION['correo']=$correo;

    $insert=mysqli_query(conectar(),"INSERT INTO login ( `correo_usuario`, `estatus`, `fecha_hora`) VALUES ('$correo','ONLINE',now())");
    $insert=mysqli_query(conectar(),"UPDATE login SET estatus='ONLINE', fecha_hora=now() WHERE correo_usuario='$correo'");

}else{

    echo "<script>Swal.fire({
        text:'Contraseña Incorrecta',
        icon:'error',
        confirmButtonColor: '#000000'

    })</script>";

}



   





}else{


    echo "<script>Swal.fire({
        text:'Usuario no encontrado',
        icon:'error',
        confirmButtonColor: '#000000'

    })</script>";
}







?>