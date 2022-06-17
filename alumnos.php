<?php

$q= (isset($_GET["q"])?$_GET["q"]:"");
$usuario= "root";
$pwd= "mysql";
$servidor= "localhost";
$db= "escuela";

$conn= mysqli_connect($servidor,$usuario,$pwd, $db) or die("Error en la conexión de la base de datos");

$sql= "SELECT * FROM alumnos WHERE nombres regexp '^".$q.".'";
$r= mysqli_query($conn,$sql);
print header("Content-type:text/xml");
print "<?xml version='1.0' encoding='UTF-8'?>";
print "<alumnos>";
while ($data= mysqli_fetch_object($r)) {
    print "<alumno>";
    $nombres= $data->nombres;
    $apellidos= $data->apellidos;
    $promedio= $data->promedio;
    print "<nombres>".$nombres."</nombres>";
    print "<apellidos>".$apellidos."</apellidos>";
    print "<promedio>".$promedio."</promedio>";
    print "</alumno>";
  


}
print "</alumnos>";
mysqli_close($conn);

?>