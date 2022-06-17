<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays en PHP</title>
</head>
<body>
    <?php
    
    $meses= array("Enero", "Febrero", "Marzo", "Abril", "Mayo","Junio","Julio", "Agosto", "Septiembre",
    "Octubre", "Novimbre", "Diciembre");
    $dias[]= "Lunes";
    $dias[]= "Martes";
    $dias[]= "Miercoles";
    $dias[]= "Jueves";
    $dias[]= "Viernes";
    $dias[]= "Sábado";
    $dias[]= "Domingo";
    
    $alumnos[0]= "Alejandro";
    $alumnos[1]= "Michell";
    $alumnos[2]= "Jessica";
    $alumnos[3]= "Laura";
    $alumnos[4]= "Pedro";
    $alumnos[5]= "Pablo";

    print "Hoy es 2 de ".$meses[2]. " y es ".$dias[0]." y el alumno en presentar el examen es ".$alumnos[3];
    ?>
</body>
</html>