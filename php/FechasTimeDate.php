<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas: time() y date()</title>
</head>
<body>
    <?php
    
    
    $t= time();
    print "<p>".$t."</p>";
    $fecha = date("d/m/Y", $t);
    
    print "<p>".$fecha."</p>";

    $hora= date("h:i:s", $t);
    print "<p>".$hora."</p>";

    $diaSemana = date("l", $t);
    $diaMes= date("j", $t);
    $mes= date("F", $t);
    $año= date("Y", $t);
    $hora= date("H", $t);
    $ampm= date("A", $t);
    $min= date("i,", $t);

    print "Hola es " .$diaSemana." del mes ".$mes." a".$diames." del año ".$año." y son las".$hora." y ".$min." minutos.";
    ?>



</body>
</html>