<?php

$imagen= imagecreatefromjpeg("fotos/flor10.jpg");

$marca= imagecreatetruecolor(630,40);
imagefilledrectangle($marca,9,9,620,30,0xFFa500);
imagestring($marca, 3, 20,12,"www.wiedii.co, Todos los derechpos reservados desde 2014-2022", 0x000000);

$md= 10;
$mi= 10;
$sx= imagesx($marca);
$sy= imagesy($marca);
$ix= imagesx($marca);
$iy= imagesy($marca);

imagecopymerge($imagen, $marca,$ix - $sx-$md, $iy- $sy - $mi, 0, 0, $sx, $sy, 60);

imagepng($imagen, "fotoMarca.png");


imagedestroy($imagen);
?>

<img src="fotoMarca.png">