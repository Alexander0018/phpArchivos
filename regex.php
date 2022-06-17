<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expresiones Regulares</title>
</head>
<body>
    <?php
    
    
    $cadena1="679094495987123";

    $cadena2= "$678,,,7,8.9....00";

    $regex= "/^[[:digit/]]+$/";  
    if (preg_match($regex,$cadena1)) {
       print "<p>La cadena ".$cadena1." sólo contiene números</p>";
    } else {
        print "<p>La cadena ".$cadena1."  contiene caracteres no númericos</p>";
    }
    if (preg_match($regex,$cadena2)) {
        print "<p>La cadena ".$cadena2." sólo contiene números</p>";
     } else {
         print "<p>La cadena ".$cadena2."  contiene caracteres no númericos</p>";
     }
    ?>
    
    
    
    
    
</body>
</html>