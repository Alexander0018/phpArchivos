<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadena Strplace()</title>
</head>
<body>
    <?php
    
    $salario= "$56,500.07";
    $cadena= str_replace("$", "", $salario);
    $cadena= str_replace(",","",$cadena);
    $nuevoSalario = (double) $cadena;
    $nuevoSalario *= 1.12;
    $nuevoSalarioCadena= number_format($nuevoSalario, 2);
    print "<p> Tu salario de ".$salario." más tu bono anual del %12 da un total de ".$nuevoSalarioCadena.", FELICIDADES!</p>";
    
    
    
    
    
    
    ?>
</body>
</html>