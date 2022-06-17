<?php

$tamaño= 500;


$lienzo= imagecreatetruecolor($tamaño,$tamaño);



$fondo= imagecolorallocate($lienzo,255,255,255);

imagefilledrectangle($lienzo,0,0,$tamaño,$tamaño,$fondo);

for ($i=0; $i < 1000; $i++) { 
  $x1= rand(0,$tamaño);
  $y1= rand(0,$tamaño);
  $x2= rand(0,$tamaño);
  $y2= rand(0,$tamaño); 


$color= imagecolorallocate($lienzo,rand(0,255), rand(0,255), rand(0,255));

imageline($lienzo,$x1,$y1,$x2,$y2,$color);

}

header("Content-type: image/png");


imagepng($lienzo);

imagedestroy($lienzo);
?>