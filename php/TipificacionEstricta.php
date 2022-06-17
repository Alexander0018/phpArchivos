<?php
declare(strict_types=1);
function suma(int $n1, int $n2):float
{
    return $n1 + $n2;
}


try {
    var_dump(suma(11,5));
    var_dump(suma(1,5));
} catch (TypeError $e) {
   print "<p>Error: ".$e->getMessage();
}

?>