<?php
    
    $host= "localhost";
    $usuario= "root";
    $clave= "mysql";
    $db= "quiz";
    $puerto= "3306";

   $conn= mysqli_connect($host, $usuario, $clave, $db, $puerto);
    
    if (mysqli_connect_errno()) {
        printf("Error en la conexión: %s <br>", mysqli_connect_error());
        exit();
    }

    //printf("El conjunto de caracteres inicial es %s <br>", mysqli_character_set_name($conn));
    if (!mysqli_set_charset($conn, "utf8")) {
        printf("Error cargando el conjunto de caracteres: %s <br>", mysqli_error($conn));
        exit();
    } else 
        
    
    ?>