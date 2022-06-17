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
    "Octubre", "Noviembre", "Diciembre");
    $dias[]= "Lunes";
    $dias[]= "Martes";
    $dias[]= "Miercoles";
    $dias[]= "Jueves";
    $dias[]= "Viernes";
    $dias[]= "Sábado";
    $dias[]= "Domingo";
    
    $alumnos[0]= "miguel";
    $alumnos[1]= "Michell";
    $alumnos[2]= "luisa";
    $alumnos[3]= "Laura";
    $alumnos[4]= "pedro";
    $alumnos[5]= "Pablo";

    $cal = array(2,3,5,4,60,40,20,30,20,100,25);
/*
    sort($meses);
    foreach ($meses as $key => $value){
print "<p>Meses[".$key."] = ".$value."</p>";

    }



    sort($alumnos, SORT_NATURAL | SORT_FLAG_CASE);
    foreach ($alumnos as $key => $value){
print "<p>Alumnos[".$key."] = ".$value."</p>";
*/

sort($cal, SORT_STRING);
    foreach ($cal as $key => $value){
print "<p>Calificaciones[".$key."] = ".$value."</p>";
    }

    ?>