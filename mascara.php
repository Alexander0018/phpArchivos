<?php


$imagenCadena= imagecreatefromstring(file_get_contents("fotos/ave.jpg"));

$w= imagesx($imagenCadena);
$h= imagesy($imagenCadena);

$w2= $h2= 400;


$imagen= imagecreatetruecolor($w2, $h2);
imagealphablending($imagen, true);

imagecopyresampled($imagen, $imagenCadena,0,0,0,0,$w2, $h2, $w, $h);

$mascara= imagecreatetruecolor($w2, $h2);

$trans= imagecolorallocate($mascara, 255,0,0);

imagecolortransparent($mascara, $trans);

imagefilledellipse($mascara,$w2/2,$h2/2,$w2,$h2,$trans);

$negro= imagecolorallocate($mascara,0,0,0);

imagecopymerge($imagen,$mascara,0,0,0,0,$w2,$h2,100);

imagecolortransparent($imagen,$negro);

imagefill($imagen,0,0,$negro);

imagepng($imagen, "salida.png");

imagedestroy($imagen);
imagedestroy($mascara);



?>

<img src="salida.png" alt="una imagen">