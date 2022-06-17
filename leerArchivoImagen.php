<?php



$img= @imagecreatefromjpeg("fotos/flor10.jpg");
if (!$img) {
    $img= imagecreatetruecolor(200,100);
    $color1= imagecolorallocate($img,255,255,255);
    $color2= imagecolorallocate($img,255,255,0);
    imagefilledrectangle($img,0,0,200,100,$color1);
    //cadena
    imagestring($img, 3,30,10,"No existe la imagen", $color2);
} else {
    # code...
}

header("Content-type: image/jpeg");
imagejpeg($img);
imagedestroy($img);

?>