<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos | Funciones de ubicacion</title>
</head>
<body>
    <?php
    
    $meses= array("Enero", "Febrero", "Marzo", "Abril", "Mayo","Junio","Julio", "Agosto", "Septiembre",
    "Octubre", "Novimbre", "Diciembre");
    print current($meses)."<br>";
    print next($meses)."<br>";
    print end($meses)."<br>";
    print prev($meses)."<br>";
    print next($meses)."<br>";
    print next($meses)."<br>";
    print current($meses)."<br>";
    
    ?>
</body>
</html>