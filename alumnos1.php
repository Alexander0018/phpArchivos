<?php


    
    $host= "localhost";
    $usuario= "root";
    $clave= "mysql";
    $db= "escuela";


   $conn= mysqli_connect($host, $usuario, $clave, $db) or die("Error al conectar la base de datos");
    
   if (isset($_GET["g"])) {
    $g= $_GET["g"];
   }
    
   if (isset($_GET["m"])) {
    $m= $_GET["m"];
   }

   if (isset($_GET["e"])) {
    $e= $_GET["e"];
   }

  $q= "SELECT * FROM alumnos WHERE escuela=".$e." AND genero='".$g."' AND materia=".$m;
  //print $q;
  $r= mysqli_query($conn, $q);
  if (mysqli_num_rows($r)==0) {
      print "No hay alumnos en esa selección";

  }
  else {
   
    print "<table>";
    
     while ($data= mysqli_fetch_assoc($r)) {
      print "<tr>";
      print "<td>".$data["nombres"]."</td>";
      print "<td>".$data["apellidos"]."</td>";
      print "<td>".$data["fechaNacimiento"]."</td>";
      print "<td>".$data["promedio"]."</td>";
      print "</tr>";
     }
  
  
    print "</table>";
  }
  

?>