<?php

$puntos= array(

   130,20,
   150,90,
   210,90,
   160,130,
   180,200,
   130,160,
   80,200,
   100,130,
   50,90,
   110,90);


   $lienzo= imagecreatetruecolor(250,250);
   $fondo= imagecolorallocate($lienzo,0,0,0);
   $azul= imagecolorallocate($lienzo,0,0,255);

 imagefilledrectangle($lienzo,0,0,249,249,$fondo);
imagefilledpolygon($lienzo,$puntos,10,$azul);

header("Content-type: image/png");

imagepng($lienzo);

imagedestroy($lienzo);





?>