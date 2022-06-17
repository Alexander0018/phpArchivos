<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Matemáticas | abs ceil floor</title>
</head>
<body>
    <?php
    print "<h2>Valor absoluto abs()</h2>";
    print abs(-5);
    print "<br>";
    print abs(5);
    print "<br>";
    print abs(-5.6);
    print "<br>";
    print abs(5.5);
    print "<hr>";

    print "<h2>Redondea hacia arriba ceil()</h2>";
    print ceil(-5);
    print "<br>";
    print ceil(5);
    print "<br>";
    print ceil(-5.6);
    print "<br>";
    print ceil(5.5);
    print "<hr>";

    print "<h2>Redondea hacia abajo floor()</h2>";
    print floor(-5);
    print "<br>";
    print floor(5);
    print "<br>";
    print floor(-5.6);
    print "<br>";
    print floor(5.5);
    print "<hr>";

    print "<h2>Redondea round()</h2>";
    print round(-5);
    print "<br>";
    print round(5);
    print "<br>";
    print round(-5.6);
    print "<br>";
    print round(5.5);
    print "<hr>";
    
    print "<h2>Valor máximo max()</h2>";
    print max(5,3,8,3);
    print "<br>";
    print max(array(8,2,4,2,32));
    print "<br>";
 
    print "<h2>Valor minimo min()</h2>";
    print min(5,3,8,3);
    print "<br>";
    print min(array(8,2,4,2,32));
    print "<br>";
    
    
    
    ?>
</body>
</html>