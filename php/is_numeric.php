<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones  Matematicas</title>
</head>
<body>
    <?php
    
    print is_numeric(5)? "Verdadero": "Falso";
    print "<br>";
    print is_numeric("cinco")? "Verdadero": "Falso";
    print "<br>";
    print is_numeric("5")? "Verdadero": "Falso";
    print "<br>";
    print is_numeric("$5.00")? "Verdadero": "Falso";
    print "<hr>";
    print is_nan(acos(8))? "No es un número(NaN)": "Si es un número";
    print "<br>";
    print is_nan(acos(1))? "No es un número(NaN)": "Si es un número";
    print "<hr>";
    print is_finite(log(0))? "Es un número finito": "No es un número finito";
    print "<br>";
    print is_finite(acos(1))? "Es un número finito": "No es un número finito";
    print "<hr>";
    print is_infinite(10/0)? "Es un número infinito": "No es un número infinito";
    print "<br>";
    print is_infinite(acos(10/1))? "Es un número infinito": "No es un número infinito";
    print "<hr>";
    
    
    
    
    
    
    ?>
</body>
</html>