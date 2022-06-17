<?php


$cadena = "En el agua clara, que brota en la fuente, un lindo pescadito, sale de repente";
file_put_contents("poema.txt", $cadena);

$cadena = file_get_contents("poema.txt");

print "<h3>".$cadena."</h3>";

$cadena = "Lindo pescadito, no quieres salir, a jugar con mi aro, vamos al jardin";
file_put_contents("poema.txt", $cadena, FILE_APPEND | LOCK_EX);
$cadena = file_get_contents("poema.txt");

print "<h3>".$cadena."</h3>";
?>