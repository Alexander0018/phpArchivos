<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones numéricas  | range</title>
</head>
<body>
    <?php
    
    foreach (range(0,30) as $key => $value) {
        print $value.", ";
    }
    print "<hr>";
    foreach (range(30,0) as $key => $value) {
        print $value.", ";
    }
    print "<hr>";
    foreach (range(30,0, 5) as $key => $value) {
        print $value.", ";
    }
    print "<hr>";
    foreach (range("a","z") as $key => $value) {
        print $value.", ";
    }
    print "<hr>";
    foreach (range("z","a") as $key => $value) {
        print $value.", ";
    }
    print "<hr>";
    $numeros = range(0,100,5);
    shuffle($numeros);
    foreach ($numeros as $key => $value) {
        print $value.", ";
    }
    print "<hr>";
    
    ?>
</body>
</html>