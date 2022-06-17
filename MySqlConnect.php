
<?php

require_once("dbconn.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL | connect |require | insert | Delete | UPDATE | set_charset</title>
   
</head>
<body>
    <?php 
    
   $pregunta = mysqli_real_escape_string($conn,"¿Cuál es la 'capital' de Italia?");
   $op1 = mysqli_real_escape_string($conn,"Moscú");
   $op2 = mysqli_real_escape_string($conn,"Roma");
   $op3= mysqli_real_escape_string($conn,"Caracas");
   $op4= mysqli_real_escape_string($conn,"O' donnel");
   $res= mysqli_real_escape_string($conn,"2");
   $examen= mysqli_real_escape_string($conn,"GEO01");

   //armamos el query

   $q = "INSERT INTO preguntas(id,pregunta,op1,op2,op3,op4,buena,examen) ";
   $q.= "VALUES(0,'".$pregunta."','".$op1."','".$op2."','".$op3."','".$op4."','".$res."','".$examen."')";
    
    if ( mysqli_query($conn, $q)) {
       print "<p>Se insertó correctamente el registro</p>";
    }
    else {
        print "<p>No se insertó correctamente el registro</p>";
    }
    
    /*$q= "DELETE FROM preguntas";
    if ( mysqli_query($conn, $q)) {
        print "<p>Se eliminó correctamente el registro</p>";
     }
     else {
         print "<p>No se eliminó correctamente el registro</p>";
     }
      
      $q= "UPDATE preguntas SET op4='Nueva York'";
    if ( mysqli_query($conn, $q)) {
        print "<p>Se modificó correctamente el registro</p>";
     }
     else {
         print "<p>No se modificó correctamente el registro</p>";
     }*/
     
     $q= "SELECT * FROM  preguntas";
     $r= mysqli_query($conn, $q);
     $n= mysqli_num_rows($r);
     
    ?>

    <?php
    
    print "<h2>Número de registros: ".$n."</h2>";

    print "<table border='1'>";
    while ($data= mysqli_fetch_assoc($r)) {
        print "<tr>";
        print "<td>".$data["pregunta"]."</td>";
        print "<td>".$data["op1"]."</td>";
        print "<td>".$data["op2"]."</td>";
        print "<td>".$data["op3"]."</td>";
        print "<td>".$data["op4"]."</td>";
        print "<td>".$data["examen"]."</td>";
      

        print "</tr>";

    }
    print "</table>";
    ?>
</body>
</html>