<?php

function suma($n1, $n2)
{
   $suma= $n1+$n2;
   if ($suma>10) {
 throw new Exception("Las sumas no pueden ser mayores a 10", 1);
 
   }
   print $suma;
}

suma(14,5);
?>