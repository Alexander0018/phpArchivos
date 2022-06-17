<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatos serialize()</title>
</head>
<body>
    <?php
    
    $arreglo = array("frutas"=>"manzana", "equipo"=>"MacBook Air", "animales"=>array(
        "perro",
        "gato",
        "ratón"
    ));
    
    $cadena= serialize($arreglo);
    print $cadena."<br>";

    $arreglo2= unserialize($cadena);
    print var_dump($arreglo2)."<br>";
    print $arreglo2["animales"][1];
    
    ?>
</body>
</html>