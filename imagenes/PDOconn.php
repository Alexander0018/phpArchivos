<?php

try {
  $conn= new PDO('sqlite:prueba.db');
  $conn-> exec("CREATE TABLE paises 
  
  (nombre TEXT, area INTEGER, poblacion INTEGER, densidad REAL) ");
  $conn= null;
} catch (PDOException $e) {
    print "Error: ".$e->getMessage()."<br>";
    die();
}


?>