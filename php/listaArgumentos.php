<?php
function Suma($simbolo, int ...$numeros)
{
     $total=0;
     foreach ($numeros as $num) {
         $total += $num;
     }
     return $simbolo.$total;
}

echo Suma("dólares ","$",3,4,5,5,5,5,6,54,33,4,345,345,34,34,3345);

?>