<?php
include "../config/dbConfig.php";
$name=$_POST['name'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
$message=$_POST['message'];




if(empty($name) || empty($mail) || empty($phone) || empty($message)){
    echo "<div class='alert alert-danger'>Hay campos vacios por favor verifique e intentelo nuevamente.</div>";
}else{
$insert=mysqli_query(conectar(),"INSERT INTO mensaje (`nombre`, `correo`, `telefono`, `mensajito`, `fecha_hora`) VALUES ('$name','$mail','$phone','$message',now())");
if($insert){
    echo "<div class='alert alert-dark'>Mensaje enviado con exito, pronto nos contactaremos con usted. <br> Gracias por visitar nuestra pagina.</div>";
}else{
    echo "<div class='alert alert-danger'>Ha ocurrido un error en el envio, por favor intentelo nuevamente.</div>";
}


}




?>