<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos Asociados</title>
</head>
<body>
    <?php
    
    $empleado= array(

"nombre" => "James",
"Apellidos" => "Bond",
"edad" => 40,
 "num " => "007",
    );
    print "Nombre:".$empleado["nombre"]." ".$empleado["Apellidos"];

    foreach($empleado as $llave =>$valor){

        print "<p>El valor de la propiedad ".$llave." es de:".$valor."</p>"; 
    }
  print"<hr>";
    asort($empleado);
    foreach($empleado as $llave =>$valor){

        print "<p>El valor de la propiedad ".$llave." es de:".$valor."</p>"; 
    }
 /*
    $alumno["Nombre"]= "Pedro";
    $alumno["Apellido"]= "Picapiedra";
    $alumno["Puesto"]= "Montacarga";

    foreach($alumno as $llave =>$valor){

        print "<p>El valor de la propiedad <b>".$llave."</b> es de:".$valor."</p>"; 
    }
    print "El nombre del empleado es $empleado[nombre], ".$empleado['Apellidos'];
    */

    ?>
</body>
</html>