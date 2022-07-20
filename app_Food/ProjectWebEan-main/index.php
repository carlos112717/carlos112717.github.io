<?php
session_start();

error_reporting(0);
if($_GET['close']=='1'){
    session_destroy();
    echo "<script>
    
    window.location.replace('./');
    </script>";
}

?>
    
    
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery.min.js"></script>
        <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap"
        rel="stylesheet"
        />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css?V654654849" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>Restaurante</title>
    </head>

    <body onload="pagine('index')">

    <style>
       
/* Estilos para motores Webkit y blink (Chrome, Safari, Opera... )*/

body::-webkit-scrollbar {
    -webkit-appearance: none;
}

body::-webkit-scrollbar:vertical {
    width:10px;
    background-color: var(--red);
}

body::-webkit-scrollbar-button:increment,.contenedor::-webkit-scrollbar-button {
    display: none;
} 

body::-webkit-scrollbar:horizontal {
    height: 10px;
}

body::-webkit-scrollbar-thumb {
    background-color: #000000;
    border-radius: 20px;
    border: none;
}

body::-webkit-scrollbar-track {
    border-radius: 10px;  
}
        </style>


    <div class="top"></div>


        <!---light-->
        <nav class="navbar navbar-expand-lg navbar-dark">

            <img src="img/logo.png"
                class="navbar-brand" style="width: 70px; margin-left: 10PX;" alt="Logo">
            <button class="navbar-toggler menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <button class="nav-link" type="button" onclick="pagine('index')"> Inicio</button>
                    </li>
                    <li class="nav-item ">
                        <button class="nav-link" type="button" onclick="pagine('menu')"> Menú</button>
                    </li>

                    <li class="nav-item ">
                        <button class="nav-link" type="button" onclick="pagine('donde_nos_encontramos')"> Donde nos encontramos </button>
                    </li>

                    <li class="nav-item ">
                        <button class="nav-link" type="button" onclick="pagine('promo')"> Promociones</button>
                    </li>

                    <li class="nav-item ">
                        <button class="nav-link" type="button" onclick="pagine('quienes_somos')">Nosotros</button>
                    </li>

                    <li class="nav-item ">
                        <button class="nav-link" type="button" onclick="pagine('contacto')">Contáctenos</button>
                    </li>

                    <?php
if(!isset($_SESSION['usuario'])){
                    ?>
                    <li class="nav-item ">
                        <button class="nav-link" type="button" onclick="pagine('registro')">Registrate</button>
                    </li>

                    <li class="nav-item ">
                        <button class="nav-link" type="button" onclick="pagine('login')">Inicia Sesion</button>
                    </li>

            <?php

}
?>
                   
               


                </ul>
 <input placeholder="Buscar" class="search">

 
                       
                   
         </div>



         <?php
if(isset($_SESSION['usuario'])){
                    ?>
             <b style="color: #ffffff; float: right; margin-right: 20px;"><i class="fas fa-user"></i> <?php echo strtoupper($_SESSION['usuario']);  ?></b>
<a href="?close=1" style="color: #ffffff; text-decoration: none; font-weight: bold; margin-right: 20px;">Cerrar Sesion</a>
             <?php

}
?>
        </nav>

        <div id='resp_data' class="container" style="margin-top: 110px;"></div>



            <!-- seccion del footer -->
            <footer>
                
                © 2021 Company, Inc &nbsp;

                <a class="text-muted m-2" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    
                <a class="text-muted m-2" href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                
            </footer>



        
        
            <script>
navigator.geolocation.getCurrentPosition(function(location) {

$.ajax({
    type:'POST',
    url:'includes/visita.php',
    data:"longitud="+location.coords.longitude+"&latitud="+location.coords.latitude
})
	
});
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuBEidKGDuQo7Bzf1uRg47MPaRRlEesw0">
</script>

<!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
        <script src="js/functions.js"></script>
        <script src="js/main.js"></script>

<script src="js/sweetalert2.js"></script>
    </body>

    </html>