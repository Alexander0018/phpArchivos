<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leer tabla de MySQL | paginación INICIO FIN</title>
    <style>

   .activo{
       background-color: orange;
   }


    </style>
    <script>
    
    function cambiaPagina(p) {
        window.open("LeerTabla.php?p="+p,"_self")
    }


    </script>
</head>
<body>
<?php
    
    $host= "localhost";
    $usuario= "root";
    $clave= "mysql";
    $db= "alumnos140410";
    $puerto= "3306";
   
    $TAMAÑO_PAGINA= 10;
    $PAGINAS_MAXIMAS= 5;

    if (isset($_GET["p"])) {
        $pagina= $_GET["p"];
    }
    else {
        $pagina= 1;
    }
       $inicio=($pagina-1)*$TAMAÑO_PAGINA;



   $conn= mysqli_connect($host, $usuario, $clave, $db, $puerto) or die("Error al conectar la base de datos");

   $q= "SELECT COUNT(*) as reg FROM alumnos";

   $r= mysqli_query($conn, $q);
   $data= mysqli_fetch_assoc($r);
   $num= $data["reg"];

   $totalpag= ceil($num/$TAMAÑO_PAGINA);


   $q= "SELECT *  FROM alumnos LIMIT ".$inicio.",".$TAMAÑO_PAGINA;

   $r= mysqli_query($conn, $q);
 

   print "<h2>Tenemos en total ".$num." alumnos</h2>";
   print "<table border=1>";

     print "<tr>";
     print "<th>Num.</th>";
     print "<th>Nombres</th>";
     print "<th>Apellidos</th>";
     print "<th>Fecha de Nacimiento</th>";
     print "<th>Promedio</th>";
     print "<th>Género</th>";
     print "<th>idEscuela</th>";
     print "<th>idSalon</th>";
     print "<th>idCurso</th>";
     print "</tr>";

       while ($data= mysqli_fetch_assoc($r)) {
        print "<tr>";
        print "<td>".$data["id"]."</td>";
        print "<td>".$data["nombre"]."</td>";
        print "<td>".$data["apellidos"]."</td>";
        print "<td>".$data["nacimiento"]."</td>";
        print "<td>".$data["promedio"]."</td>";
        print "<td>".$data["sexo"]."</td>";
        print "<td>".$data["idEscuela"]."</td>";
        print "<td>".$data["idSalon"]."</td>";
        print "<td>".$data["idCurso"]."</td>";
        
       }




   print "</table>";
  if ($totalpag> $PAGINAS_MAXIMAS) {
      if ($pagina==$totalpag) {
          $inicio= $pagina-$PAGINAS_MAXIMAS;
          $fin= $totalpag;
      } else {
        $inicio= $pagina;
        $fin= $inicio-1+ $PAGINAS_MAXIMAS;
      }
      if ($inicio!=1) {
          print "<button type='button' onclick='cambiaPagina(1)'>Inicio</button>";
          print "<button type='button' onclick='cambiaPagina(".($pagina-1).")'>Anterior</button>";
      }
  } else {
      $inicio=1;
      $fin= $totalpag;
  }
   for ($i=$inicio; $i <=$fin ; $i++) { 
       print "<button type='button' ";
       if ($i==$pagina) 
           print " class='activo' ";
           print " onclick='cambiaPagina(".$i.")'>".$i."</button>";
       }
       
       if ($totalpag> $PAGINAS_MAXIMAS && $pagina!=$totalpag) {
           print "<button type='button' onclick='cambiaPagina(".($pagina+1).")'>Siguiente</button>";
          print "<button type='button' onclick='cambiaPagina(".$totalpag.")'>Fin</button>";
       }
   
    ?>
</body>
</html>