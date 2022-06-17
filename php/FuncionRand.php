<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones matematicas | aleatorios</title>
</head>
<body>
    <?php
    
    print rand()."<br>";
    print rand()."<br>";
    print rand(200,650)."<br>";
    print getrandmax()."<br>";
    //
    list($param1, $param2) = explode(" ",microtime());
    $semilla = $param2 + $param1 * 100000;
    print "Semilla ".$semilla."<br>";
    srand($semilla);
    $r= rand();
    print $r;
    print "<hr>";

    list($param1, $param2) = explode(" ",microtime());
    $semilla = $param2 + $param1 * 100000;
    print "Semilla ".$semilla."<br>";
    mt_rand($semilla);
    $r= mt_rand();
    print $r;
    print "<hr>";
    ?>
</body>
</html>