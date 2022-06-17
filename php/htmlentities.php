<?php


$cadena = "Agua \"pasa\" por <b>mi casa</b>, cate <i>por mi</i> corazon";

$a = htmlentities($cadena);

$b = htmlentities($a);

echo $a;
echo "<br>";
echo $b;
?>