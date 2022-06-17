<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales Sintaxis Alterna</title>
</head>
<body>
    <?php 
    
    $edad= 35;
    if($edad>40) print "<p> Te regalamos boletos para la Òpera</p>";
    else print "<p>Te regalamos boletos para el cine</p>";
    
    $a= 15;

    $b= 18;

    if($a > $b): 
        print $a. "es mayor a ". $b;
    elseif($a<$b):
        
        print $a."es menor a ". $b;
    else:
        print $a. "es igual a ". $b;
    endif;
    ?>
</body>
</html>