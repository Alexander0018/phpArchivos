<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas | str_shuffle</title>
</head>
<body>
    <?php
    $cadena = "23456789abcdefghijklmnerfABCDEFGHIJKLMNOPQRSTUVWXYZ-_+@";
    $clave= substr(str_shuffle($cadena),0,12);
    print "<p>Tu nueva clave es: ".$clave."</p>";
    
    
    ?>
</body>
</html>