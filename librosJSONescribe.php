<?php
//Archivo
$path = "alumnos2.json";
//Crear el archivo
$file = fopen($path, "w");
//Crea el arreglo
$alumnos = array(
    array("nombre"=>"Juan","cali"=>"9.5"),
    array("nombre"=>"María","cali"=>"8.6")
);
//Convertirlo en JSON
$json = json_encode($alumnos);
//Guardarlo
fwrite($file, $json);
//Crerrar el archivo
fclose($file);
?>