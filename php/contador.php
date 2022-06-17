<?php

$archivo= "contador.txt";
if (file_exists($archivo)) {
    $a= fopen($archivo, "r+");
    $visita= fgets($a,1024);
    $visita++;
    rewind($a);
    fwrite($a,$visita);
} else {
    $a= fopen($archivo, "w+");
    $visita= 1;
    fwrite($a,$visita);
}
fclose($a);
//
if ($visita==1) {
    print "Felicidades, usted es nuestra primera visita";
} else {
   print "Esta es la visita no.: ".$visita;
}


?>