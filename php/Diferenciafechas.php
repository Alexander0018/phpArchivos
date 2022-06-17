<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferencias fechas</title>
</head>
<body>
    <?php
    
    $fechaInicial= "2019-06-01";
    $fechaFinal= date("Y/m/d");
    function diferenciaFechas($fechaInicial, $fechaFinal)
    {
        $dias=(strtotime($fechaInicial)-strtotime($fechaFinal))/(60*60*24);
        
        $dias= abs($dias);
        $dias= floor($dias);
        
        return $dias;
    }
    print "Dia transcurridos: entre ".$fechaInicial." y ".$fechaFinal." ".diferenciaFechas($fechaInicial,$fechaFinal);
    ?>
</body>
</html>