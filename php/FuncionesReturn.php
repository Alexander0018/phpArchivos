<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones | Return </title>
</head>
<body>
    <?php
    
    
    /*Variables*/ 
    $subtotal = 1500;
    $tasa = 0.16;
    $iva = 0;
    $edad = 34;
    /*Funciones*/ 

   function calculaIva($sub, $porcien){
 $ivaCalculo= $sub * (1+$porcien);
 return $ivaCalculo;

   }
   function validaEdad($edad){

    $valida = ($edad<=0 Or $edad>120);
    return !$valida;
   }


    /*To Do*/ 



    print "<p>Subtotal:".$subtotal."</p>";
    $iva = calculaIva($subtotal, $tasa);
    print "<p>Total con IVA: ".$iva;

    if (validaEdad($edad)) {
        print "<p>Edad válida</p>";
    } else {
        print "<p>Edad Invalida</p>";
    }
    
    ?>
</body>
</html>