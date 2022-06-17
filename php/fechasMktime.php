<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas | mktime</title>
</head>
<body>
    <?php
    
    $cumple= mktime(0,0,0,8,27,1999);
    $hoy= time();
    $edad= $hoy-$cumple;

    print "<p>tu naciste un".date(" l ",$cumple)."</p>";
    print "<p>Haz vivido aproximadamente ".($edad/60/60/24). "</p>dias";
    
    print "<p>Haz vivido aproximadamente ".($edad/60/60/24/365)."</p>años";
    
    ?>
</body>
</html>