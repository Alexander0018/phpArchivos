<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones matemáticas | Cambio de base</title>
</head>
<body>
    <?php
    
    $hexadecimal = "FF6600";
    print base_convert($hexadecimal,16,2);
    print "<br>";
    print base_convert($hexadecimal,16,8);
    print "<br>";
    print base_convert($hexadecimal,16,10);
    print "<hr>";
    print hexdec("ABCD");

    
    
    
    
    ?>
</body>
</html>