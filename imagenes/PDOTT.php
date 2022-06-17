<?php

try {
    $conn= new PDO('sqlite:prueba.db');
    print "Conexion exitosa"."<br>";
} catch (PDOException $e) {
die("Error".$e->getMessage());
}

 try {
    $plantilla= $conn->prepare("INSERT INTO paises(nombre, area, poblacion, densidad) values (:nombre, :area, :poblacion, :densidad)");
    $plantilla->bindParam(':nombre', $nombre);
    $plantilla->bindParam(':area', $area);
    $plantilla->bindParam(':poblacion', $poblacion);
    $plantilla->bindParam(':densidad', $densidad);

    $conn->beginTransaction();
     $nombre= 'Nicaragua'; $area= 129292; $poblacion= 602334; $densidad= 46.44;
     $plantilla->execute();
     $nombre= 'Panama'; $area= 12492; $poblacion= 6044334; $densidad= 46.44;
     $plantilla->execute();
    $conn->commit();
 } catch (Exception $e) {
    $conn->rollBack();
    print "Error:".$e->getMessage();
 }
?>