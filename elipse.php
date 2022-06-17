<?php

$lienzo= imagecreate(600,600);

for ($i=0; $i < 100; $i++) { 
  $rojo= rand(0,255);
  $verde= rand(0,255);
  $azul= rand(0,255);


  $relleno= imagecolorallocate($lienzo,$rojo,$verde,$azul);


  $x= rand(0,600);
  $y= rand(0,600);
  $h= rand(30,100);
  $w= rand(0,600);



 imagefilledellipse($lienzo,$x,$y,$w,$h,$relleno);
 header("Content-type: image/png");


 imagepng($lienzo);


 imagedestroy($lienzo);
}






?>