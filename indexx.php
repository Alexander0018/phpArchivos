<?php
require "use.php";
print "<h2>Clases del espacio de nombres<h2>";
$perro= new Animal\Mamiferos\Perro;
$gato= new Animal\Mamiferos\Gato;

print "<h2>funciones del espacio de nombres<h2>";
$perro= new Animal\Mamiferos\ladrar();
$gato= new Animal\Mamiferos\maullar();

print "<h2> Constantes del espacio de nombres";
$perro= new Animal\Mamiferos\Perro."<br>";
$gato= new Animal\Mamiferos\Gato."<br>";

?>