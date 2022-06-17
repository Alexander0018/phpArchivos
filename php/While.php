<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclo While</title>
</head>
<body>
    <?php 
    
    $contador= 1;

    $veces= 7;

    print "<p>se van a visualizar".$veces." numeros</p>";

    while($contador<=$veces){
print "<p> Número: ".$contador."</p>";
$contador++;

    }
    
    print "Fin del ciclo, el contador tiene el valor de ".$contador;
    
    ?>
</body>
</html>