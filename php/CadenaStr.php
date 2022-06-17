<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas  Str</title>
</head>
<body>
    <?php
    $tabla= get_html_translation_table(HTML_ENTITIES);
    $cadena = "La etiqueta que efectúa un salto de línea en HTML es: <br>";
    print $cadena;
    print "<br>";
   print strtr($cadena,$tabla);
    
    
    
    
    ?>
</body>
</html>