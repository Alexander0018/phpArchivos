<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar un correo electronico con expresiones regulares</title>
</head>
<body>
    <?php
    
    function validaCorreo($correo)
    {
     $r= preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/", $correo);
     return $r;
    }
    
    $correo= "francisco.arce@yahoo.com.mx";
    if (validaCorreo($correo)) {
        print "El correo '".$correo."' es correcto";
    } else {
        print "El correo '".$correo."' es incorrecto";
    }
    
    
    ?>
</body>
</html>