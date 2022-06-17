<?php
function validaNombre($cadena)
{
   if (strpos($cadena,", ")==false)return false; {
       list($apellido,$nombre)= explode(", ",$cadena,2);

       $vacios=(empty($apellido || empty($nombre)));
       $sonCadenas= (!is_string($apellido) || !is_string($nombre));
       if ($vacios || $sonCadenas) {
           return false;
       } else {
           return $nombre." ".$apellido;
       }
       
   }
}
$nombre= "Picapiedra, Pedro";


$nuevo= filter_var($nombre,FILTER_CALLBACK,array('options'=>'validaNombre'));

if ($nuevo==false) {
    print "El nombre es incorrecto".$nuevo;
} else {
    print "El nombre es correcto: ".$nuevo;
}



?>