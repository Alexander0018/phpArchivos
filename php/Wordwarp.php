<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadena | wordwrap</title>
</head>
<body>
    <?php
    
    $cadena = "En el agua claraaaaaaaaaaaaaaaaaaaaaaaaaaaaaa, que brota en la fuente, un lindo pescado, sale de repente";
    $salida= wordwrap($cadena, 70,"\r\n",true);
    print $salida;
    
    
    
    
    ?>
</body>
</html>