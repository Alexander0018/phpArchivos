<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas | Mayúsculas y minúsculas</title>
</head>
<body>
    <?php
    
    $cadena = "En el agua clara, que brota en la fuente...";
    $mayusculas= strtoupper($cadena);
    $minusculas= strtolower($cadena);
    print "<p>".$cadena."</p>";
    print "<p>".$mayusculas."</p>";
    print "<p>".$minusculas."</p>";
    
    
    
    ?>
</body>
</html>