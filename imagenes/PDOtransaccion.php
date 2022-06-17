<?php
try {
    $conn= new PDO('sqlite:prueba.db');
    print "Conexion Exitosa"."<br>";
    
} catch (Exception $e) {
   die("Error". $e->getMessage());
}

try {
    $conn->beginTransaction();
    $conn->exec("INSERT INTO paises(nombre,area,poblacion,densidad) values ('Belice', 22966,334000,14.54)");
    $conn->exec("INSERT INTO paises(nombre,area,poblacion,densidad) values ('Costa Rica', 51100,47260000,92.49)");
    $conn->exec("INSERT INTO paises(nombre,area,poblacion,densidad) values ('El Salvador', 229366,334430,14.55)");
    $conn->exec("INSERT INTO paises(nombre,area,poblacion,densidad) values ('Guatemala', 2294466,33455000,14.94)");
    $conn->exec("INSERT INTO paises(nombre,area,poblacion,densidad) values ('Honduras', 229656,33400550,14.554)");

    $conn->commit();
} catch (Exception $e) {
   $conn -> rollBack();

   print "Error: ".$e->getMessage();
}


?>