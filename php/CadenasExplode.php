<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas | explode</title>
</head>
<body>
    <?php
    
    $frutas = "manzana pera guayaba piña sandia";
    $frutas_array = explode(" ", $frutas);
    foreach ($frutas_array as $key => $value) {
        print $value."<br>";
    }
    //asignar valores
    list($manzana, $pera, $guayaba, $piña, $sandia) = explode(" ", $frutas);
    print "La fruta con más vitamina C es la  ".$guayaba."<br>";
    print "<hr>El uso de los limites";
    $frutas_array = explode(" ", $frutas,2);
    foreach ($frutas_array as $key => $value) {
        print $value."<br>";
    }
    print "<hr>El uso de los limites negativos ";
    $frutas_array = explode(" ", $frutas,-2);
    foreach ($frutas_array as $key => $value) {
        print $value."<br>";
    }
    ?>
</body>
</html>