<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables de variables y constantes</title>
</head>
<body>
    <?php 
    
    $df= 22000000;
    $guadalajara= 4000000;
    $monterrey= 1400000;
    $Colombia= 50000000;

    //variable de variable
    $ciudad= "df";

    print "<p> La poblacion de la ciudad  $ciudad es de ${$ciudad}</p>";
    
    $ciudad= "Colombia";

    print "<p> La poblacion de la ciudad  $ciudad es de ${$ciudad}</p>";
    //

    define("TASA_CAMBIO", 13.35);
    $deuda= 500000;
    print "tu deuda en dolares es de  ". ($deuda*TASA_CAMBIO);
    ?>
</body>
</html>