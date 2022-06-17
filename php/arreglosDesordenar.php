<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Desordenados</title>
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

    shuffle($alumnos);
    print "<ul>";
    foreach($alumnos as $key => $value){

        print "<li>".$value."</li>";
    }
    print "</ul>";


    $examen= array_rand($alumnos,2);

    print "<ul>";
    foreach($examen as $key => $value){

        print "<li>".$value." ".$alumnos[$value]."</li>";
    }
    print "</ul>";

    print "<ul>";
    foreach($alumnos as $key => $value){

        print "<li>".$value."</li>";
    }
    print "</ul>";
    ?>
</body>
</html>