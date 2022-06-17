<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas checkdatedate</title>
    <style>

   .errores{
       color:"red";
       margin: 0;
       padding: 0;
   }

    </style>
    <?php

    $errores= array();
    if (isset($_GET["fecha"])) {
        $fecha= $_GET["fecha"];
        $fecha= trim($fecha);

        if ($fecha=="") {
            $errores[1]="la fecha es requerida";
        }
        else{
            //dd/mm/yy
            $fecha_array = explode("/", $fecha);
             if (checkdate($fecha_array[1], $fecha_array[0], $fecha_array[2])) {
                 print "Fecha correcta ".$fecha;
             }
             else {
                 print "Error  en la fecha".$fecha;
             }
        }
    }
    

    
    ?>
</head>
<body>
    <form action="FechascheckDate.php" method="GET">
    <input type="text" name="fecha" id="fecha" placeholder="DD/MM/YY"/>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>