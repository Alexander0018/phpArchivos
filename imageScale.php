<?php

$original= "fotos/";

$destino= "fotos/";



$imagenes_array= glob($original."*.jpg");

foreach ($imagenes as $imagen) {
    $img= imagecreatefromjpeg($imagen);

    print $imagen."<br>";



    $img= imagescale($img,640);

    imagejpeg($img, $destino.basename($imagen));

}
imagedestroy($img);



?>