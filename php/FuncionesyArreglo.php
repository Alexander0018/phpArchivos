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
array_push($meses, "13 mes", "14 mes");
array_unshift($dias, "primero", "primerisimo");
array_shift($meses);
$mesesNuevos= array_slice($meses,11,2);
$diasEliminados= array_splice($dias, 5,2);
    $mesesDias= array_merge($meses, $dias);
    foreach($mesesDias as $key => $value){
 print "Elemento ".$key." con valor: ".$value."</p>";

    }
    print "<hr>";
    foreach($mesesNuevos as $key => $value){
        print "Elemento ".$key." con valor: ".$value."</p>";
    }
    print "<hr>";
    foreach($diasEliminados as $key => $value){
        print "Elemento ".$key." con valor: ".$value."</p>";
    }
    ?>