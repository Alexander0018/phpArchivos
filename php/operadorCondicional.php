<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Condicional</title>
</head>
<body>
    <?php
    
    
    $total= 12345;
    $tipoCambio= 18.95;

    $granTotal= ($tipoCambio>0)? $total* $tipoCambio : $total;
    $cadena= ($tipoCambio>0)? ", tipo de cambio". $tipoCambio : "";

    print "el gran total del pedido es ". $granTotal.$cadena;
    
    
    
    ?>
</body>
</html>