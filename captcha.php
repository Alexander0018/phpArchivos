<?php

session_start();



header("Content-Type: image/png");


$img= imagecreatetruecolor(150,30);

$blanco= imagecolorallocate($img,255,255,255);
$gris= imagecolorallocate($img,128,128,128);
$negro= imagecolorallocate($img,0,0,0);
$amarillo= imagecolorallocate($img,255,255,0);

imagefilledrectangle($img,0,0,399,29,$amarillo);

$l= rand(5,7);
$c= "abcdefghijkmnopqrstuvxyz23456789";
$str= "";
$i=0;
srand((double)microtime()*10000000);

while ($i<= $l) {
    $num= rand() % 33;
    $car= substr($c,$num,1);
    $str.=$car;
    $i++;
}
$text= $str;

$fuente= "arial.ttf";

imagettftext($img,20,0,15,25,$gris,$fuente,$text);


imagettftext($img,20,0,15,25,$negro,$fuente,$text);


$_SESSION["captcha"]= $text;
imagepng($img);


imagedestroy($img);


?>