<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula Edad</title>
</head>
<body>
    <?php
    date_default_timezone_set("America/Mexico_City");
    function calculaEdad($fecha)
    {
        list($Y,$m,$d)= explode("-", $fecha);
        return(date("md")<$m.$d? date("Y")-$Y-1 :  date("Y")-$Y-1);
    }
    print "Tu edad es: ".calculaEdad("2002-01-13")." años";
    
    
    
    ?>
</body>
</html>