<?php

$cadena= "Soy el 'rey' de la colina, dijo Joe's";

$cadena= addslashes($cadena);
print $cadena."<br>";
$cadena= stripslashes($cadena);
print $cadena."<br>";
?>