<?php
    
    $host= "localhost";
    $usuario= "root";
    $clave= "mysql";
    $db= "imagenes";


   $conn= mysqli_connect($host, $usuario, $clave, $db);
    
    if (mysqli_connect_errno()) {
        printf("Error en la conexión: %s <br>", mysqli_connect_error());
        exit();
    }