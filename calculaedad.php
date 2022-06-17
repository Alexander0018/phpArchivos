<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula Edades</title>
</head>
<body>
    <?php
    function edad($fecha)
    {
        $diaactual= date("j");
        $mes= date("n");
        $año= date("Y");


        $añonacimiento= substr($fecha,0,4);
        $mnacimiento= substr($fecha,5,2);
        $dnacimiento= substr($fecha,8,2);


        if ($mnacimiento>$mes) {
            $edad= $año-$añonacimiento-1;
            
        }elseif ($mes==$mnacimiento and $dnacimiento>$diaactual) {
            $edad= $año-$añonacimiento-1;
        } else {
            $edad= $año-$añonacimiento;
        }
        return $edad;
    }
   
    print "Tenemos ".edad("1925-01-05")." años";
    
    
    
    
    ?>
</body>
</html>