<?php
    
    
    $nombre = "datos";
    $valor = "pacoarce@hotmail.com | Francisco | Arce | 20180411";
    $fecha = time() - 1;
    setcookie($nombre, $valor, $fecha);
    
    
    
    
    
    ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galletas | Crear cookie | Borrar Cookie</title>
</head>
<body>
    <?php
    
    
    if (isset($_COOKIE["datos"])) {
    $datos= $_COOKIE["datos"];
    $datos_array= explode("|", $datos);
    $email = $datos_array[0];
    $nombre = $datos_array[1];
    $apellido = $datos_array[2];
    $fecha = $datos_array[3];

    print "<p>Hola ".$nombre." ".$apellido.", recibimos tu mensaje del correo ".$email." en la fecha".$fecha."En breve nos comunicaremos.</p>";
    } else {
        # code...
    }
    
    
    
    ?>
</body>
</html>