<?php
try {
  $conn = new PDO('sqlite:prueba.db');
  print "Conexion exitosa"."<br>";
} catch (PDOException $e) {
  die("Error".$e->getMessage());
}

try {
  $plantilla = $conn->prepare("INSERT INTO paises(nombre,area,poblacion,densidad) 
  VALUES(?,?,?,?)");
  $conn->beginTransaction();
  $plantilla->execute(array("Cuba",201010,100000,46.55));
  $conn->commit();
} catch (Exception $e) {
  $conn->callBack();
  print "Error:".$e->getMessage();
}

?>