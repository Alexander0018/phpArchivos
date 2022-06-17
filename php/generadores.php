<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones | Generadores</title>
</head>
<body>
    <?php
    function rango($inicio, $fin, $incremento=1)
    {
        for ($i=$inicio; $i <=$fin ; $i+=$incremento) { 
           yield $i;
        }
    }
    foreach (range(1,10) as $key => $value) {
        print $value." ";
    }
    
    print "<hr>";

    foreach (rango(1,10) as $key => $value) {
        print $value." ";
    }
    
    print "<hr>";
    
    ?>
</body>
</html>