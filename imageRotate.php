<?php


$archivo= "fotos/flor10.jpg";

$grados= 90;

$img= imagecreatefromjpeg($archivo);

$imagen90= imagerotate($img, $grados,0);
$imagen270= imagerotate($img, 270,0);
$imagen66= imagerotate($img, 66,0xffffff);

imagejpeg($imagen90, "foto90.jpg");
imagejpeg($imagen270, "foto270.jpg");
imagejpeg($imagen66, "foto66.jpg");




?>

<img src="foto90.jpg">
<img src="foto270.jpg">
<img src="foto66.jpg">