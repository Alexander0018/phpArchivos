<?php
/*
$imagen= getimagesize("snoopy.jpg");
var_dump($imagen);
print $imagen[1];
*/
print getimagesize("snoopy.jpg")[1]."<br>";
print getimagesize("snoopy.jpg")["mime"]."<br>";

?>