<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables de Alcance</title>
</head>
<body>
    <?php
    /*
    
    Variables

    
    */ 
    $empleado = "Pedro Picapiedra";
    $mensaje = "Buenos Dias";

    /*
    
    Funciones
    
    
    */ 
    function saludo($nombre, $msg){
        
print " <h2> Hola ".$nombre.",".$msg."</h2>";

    }
    /*
    
    To DO
    
    
    */ 
    saludo($empleado, $mensaje);
  
    
    ?>
</body>
</html>