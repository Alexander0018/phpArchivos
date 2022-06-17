<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas getdate</title>
</head>
<body>
    <?php
    
    
    $meses= array("Enero", "Febrero", "Marzo", "Abril", "Mayo","Junio","Julio", "Agosto", "Septiembre",
    "Octubre", "Novimbre", "Diciembre");
    $dias[]= "Domingo";
    $dias[]= "Lunes";
    $dias[]= "Martes";
    $dias[]= "Miercoles";
    $dias[]= "Jueves";
    $dias[]= "Viernes";
    $dias[]= "Sábado";
   
    
    $fecha_array= getdate();
    $dia= $dias[$fecha_array["wday"]];
    $mes= $meses[$fecha_array["mon"]-1];
    print "hoy es ".$dia." ".$fecha_array["mday"]." de ".$mes." de ".$fecha_array["year"].", y son las ".$fecha_array["hours"]." con ".$fecha_array["minutes"]." minutos.";
    
    ?>
</body>
</html>