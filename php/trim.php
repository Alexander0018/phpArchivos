<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limpiar cadenas: trim(), rtrim() y ltrim()</title>
</head>
<body>
    <?php 
    
    $texto =  "\t\rHola, cara de bola\t\t";
    $binarias = "\x09Hola,  cara de bola\x0A";
    $saludo= "www.google.com/";
    var_dump($texto, $ninarias, $saludo);
    print "<br>";
    $cadena = rtrim($texto);
    var_dump($cadena);
    print "<br>";
    $cadena= trim($texto);
    var_dump($cadena);
    print "<br>";
    $cadena= ltrim($binaria,"\x00..\x1F");
    var_dump($cadena);
    print "<br>";
    $cadena= rtrim($binaria,"/");
    var_dump($cadena);
    print "<br>";
    
    ?>
</body>
</html>