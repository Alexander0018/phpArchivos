<?php

function suma($n1, $n2)
{
   $suma= $n1 + $n2;
   if ($suma>10) {
    throw new Exception("La suma debe ser menor a 10", 1);
    
   }
   return true;
}



try {
  suma(10,5);
  print "Si ves esta cadena, es que la suma es menor a 10";
} catch (Exception $e) {
    print "Mensaje: ".$e->getMessage();
}

?>