<?php


$lienzo= imagecreatetruecolor(200,200);

$blanco= imagecolorallocate($lienzo,255,255,255);
$rojo= imagecolorallocate($lienzo,255,0,0);
$verde= imagecolorallocate($lienzo,0,255,0);

imagearc($lienzo,100,100,200,200,0,360,$blanco);

imagearc($lienzo,100,100,150,150,25,155,$rojo);
imagearc($lienzo,60,75,50,50,0,360,$verde);
imagearc($lienzo,140,75,50,50,0,360,$verde);


header("Content-type: image/png");

imagepng($lienzo);


imagedestroy($lienzo);
?>