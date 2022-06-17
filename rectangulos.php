<?php


$lienzo= imagecreate(600,200);
$colorFondo= imagecolorallocate($lienzo,255,255,255);
for ($j=0; $j < 4; $j++) { 
    for ($i=0; $i <=12; $i++) { 
        $rojo= rand(0,255);
        $verde= rand(0,255);
        $azul= rand(0,255);
   
         $relleno= imagecolorallocate($lienzo,$rojo,$verde,$azul);

         imagefilledrectangle($lienzo,50*$i,50*$j,50*($i+1),50*($j+1),$relleno);


    }
}

header("Content-type:   image/png");

imagepng($lienzo);

imagedestroy($lienzo);
?>