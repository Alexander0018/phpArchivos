<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forzar tipos de datos</title>
</head>
<body>
    <?php 
    
    $div= 10/3;
    print $div. "<br>";
    $entero= (integer) $div;
    print $entero. "<br>";

    print intval(10/3). "<br>";
    
    ?>
</body>
</html>