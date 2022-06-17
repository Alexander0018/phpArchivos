<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos | Otras funciones de ordenado</title>
</head>
<body>
    <?php 
    
    $cal= array(2,3,5,4,40,20,30,200,100,25);

    krsort($cal);
    var_dump($cal);

    foreach ($cal as $key =>$value){

        print "<p>Calificación[".$key."] = ".$value."</p>";
    }
    
    
    
    ?>
</body>
</html>