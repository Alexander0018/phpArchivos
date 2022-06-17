<?php

$destino= imagecreatefromjpeg("fotos/credencial.jpg");


$origen= imagecreatefromjpeg("fotos/pedro.jpg");

imagecopymerge($destino,$origen,15,65,0,0,185,185,100);
imagestring($destino,16,220,100,"Pedro Picapiedra",0);
imagestring($destino,16,220,200,"Rajuela y asociados , S.A. ",0)."<br>";
imagestring($destino,16,140,265,"Piedradura",0);
imagestring($destino,16,140,300,"A-34345678",0);
imagestring($destino,16,580,65,"P00000000",0);
imagestring($destino,16,575,100,"Dinosaurio",0);
imagestring($destino,16,600,135,"N/A",0);
imagestring($destino,16,580,355,"12345678",0);

header("Content-type: image/jpg");

imagejpeg($destino);
imagedestroy($destino);
imagedestroy($origen);

?>