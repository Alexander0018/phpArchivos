<?php

$correo= "fj_****(br)arce@hotmail,com.";

print $correo."<br>";

$correo= filter_var($correo, FILTER_SANITIZE_EMAIL);

print $correo."<br>";

if (filter_var($correo,FILTER_VALIDATE_EMAIL)) {
    print "El correo ".$correo." es correcto<br>";
} else {
    print "<br>";
    print "El correo ".$correo." es incorrecto<br>";
}

print "<hr>";
$saludo= "<h1>Hola, cara de bola</h1>";
print $saludo."<br>";
$cadena= filter_var(htmlspecialchars($saludo));
print $cadena."<br>";


print "<hr>";

$url= "http://www.wiedii       .       com     ";
$url= filter_var($url,FILTER_SANITIZE_URL);
print $url."<br>";

if (filter_var($url,FILTER_VALIDATE_URL)) {
    print "La url ".$url." es correcta<br>";
} else {
    print "<br>";
    print "La url ".$url." es incorrecta<br>";
}

?>