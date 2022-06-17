<?php


$arreglo = ["llaveVieja"=> 12345];
var_dump($arreglo);

if(isset($arreglo["llaveVieja"])){
$arreglo["llaveNueva"]= $arreglo["llaveVieja"];
unset($arreglo["llaveVieja"]);
}
print "<br>";
var_dump($arreglo)
?>