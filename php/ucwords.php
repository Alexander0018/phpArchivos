<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar la primera letra a mayúscula: ucwords(), ucfirst()</title>
</head>
<body>
    <?php
    
    $nombre = "juan peréz lópez";
    print ucwords($nombre)."<br>";
    print ucfirst($nombre)."<br>";
    $saludos= "HOLA MUNDO";
    print $saludos."<br>";
    $saludos= strtolower($saludos);
    print $saludos."<br>";
    $saludos= ucfirst($saludos);
    print $saludos."<br>";
    
    ?>
</body>
</html>