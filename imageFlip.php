<?php

$archivo= "fotos/flor10.jpg";

$img= imagecreatefromjpeg($archivo);

imageflip($img, IMG_FLIP_HORIZONTAL);


imagejpeg($img, "horizontal.jpg");

$img= imagecreatefromjpeg($archivo);
imageflip($img, IMG_FLIP_VERTICAL);

imagejpeg($img, "vertical.jpg");

$img= imagecreatefromjpeg($archivo);
imageflip($img, IMG_FLIP_BOTH);

imagejpeg($img, "both.jpg");


?>

<img src="fotos/flor10.jpg" alt="">
<img src="horizontal.jpg" alt="">
<img src="vertical.jpg" alt="">
<img src="both.jpg" alt="">