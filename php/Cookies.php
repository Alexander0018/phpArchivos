<?php
if (isset($_REQUEST['politica-cookies'])) {
    $caducidad = time() + (60*60*24*365);

    setcookie('politica', '1', $caducidad);
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politicas Cookies</title>
    <style>
    @keyframes bajar {
        0% {bottom: 0px;}
        80% {bottom: 0px;}
        100% {bottom: -50px;}
    }
    @keyframes subir {
        0% {bottom: -38;}
        10% {bottom: 0px;}
        80% {bottom: 0px;}
        100% {bottom: -38px;}
    }

    #galletas1:target{


        display: none;
    }
    .galletas{
        width: 100%;
        height: 43px;
        margin: 0 auto;
        padding-left: 1%;
        padding-top: 5px;
        font-size: 1.2em;
        clear: both;
        font-weight: strong;
        color: black;
        bottom: 0px;
        position: fixed;
        left: 0px;
        transition: bottom 1s;
        background-color: orange;
        opacity: 0.7;
        box-shadow: 3px -3px 1px rgba(50, 50, 50, 0.5);
        z-index: 99999999;
    }
    .galletas:hover{

        bottom: 0px;
    }
    #galletas2{

        background-color: orange;
        display: inline;
        opacity: 0.9;
        position: absolute;
        left: 1%;
        top: -30px;
        font-size: 15px;
        height: 30px;
        padding-left: 25px;
        padding-right: 25px;
        border-top-left-radius: 15px;
        border-bottom-right-radius: 15px;
        box-shadow: 3px -3px 1px rgba(50, 50, 50, 0.5);
    }
    </style>

    <script>

     window.onload= function() {
         document.getElementById("aceptar").onclick= function(){
             window.location= "?politica-cookies=acepto"
         }
     }

    </script>
</head>
<body>
    <div>

    <?php if(!isset($_REQUEST['politica-cookies']) && !isset($_COOKIE['politica'])): ?>


        <div class="galletas" id="galletas1">
           Esta web utiliza cookies para obtener datos de navegacion.
           si continuas, consideraremos que aceptas su uso.
           <a href="politica-cookies.php">Más informacion</a> <button id="aceptar">Aceptar</button>
           <div id="galletas2" onmouseover="document.getElementById('galletas1').style.bottom='0px';">Politicas de Cookies</div>
       </div>
        <?php endif; ?>
       
    </div>
</body>
</html>