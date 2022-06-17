<?php

$img= imagecreatefromjpeg("fotos/ave.jpg");

$ancho= $alto= 160;
$imagenX= $imagenY= 0;

print "<div style='width:670'>";
for ($j=0; $j < 3 ; $j++) { 
  for ($i=0; $i < 4; $i++) { 
     $destino= imagecreatetruecolor($ancho, $alto);

     imagecopyresampled($destino, $img, 0,0,$ancho*$i, $alto*$j,$ancho,$alto,$ancho, $alto);

     imagejpeg($destino,"salida".$i."-".$j."jpg");

     print "<img src='salida".$i."-".$j."jpg'>&nbsp;";
  }
}

print "</div>";


imagedestroy($img);
imagedestroy($destino);
?>