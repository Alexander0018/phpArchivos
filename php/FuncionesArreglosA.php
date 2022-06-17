<?php 

print "1.array_values() toma un arreglo asociativo y lo convierte en indexado<br>";
$arreglo= array("cielo"=>"azul", "pasto"=>"verde", "manzana"=>"verde");
print_r(array_values($arreglo));
print "<br><br>";


print "2.array_keys() devuelve todas las llaves de un arreglo o un subconjunto de llaves de un arreglo<br>";
$arreglo= array("cielo"=>"azul", "pasto"=>"verde", "manzana"=>"verde");
print_r(array_keys($arreglo));
print "<br><br>";


print "3.array_keys() Regresa todas las coincidencias en un arreglo<br>";
$arreglo= array("azul", "verde", "rojo", "verde", "rojo", "azul");
print_r(array_keys($arreglo,"rojo"));
print "<br><br>";

print "4.array_combine() Crea un nuevo arreglo, usando un arreglo para las llaves y otras para los valores<br>";
$llaves= array("cielo", "pasto", "manzana");
$valores= array("azul", "verde", "rojo");
print_r(array_combine($llaves, $valores));
print "<br><br>";

print "5.array_exits() Verifica si el indice o llave dada existe en el arreglo<br>";
$arreglo= array("cielo"=>"azul", "pasto"=>"verde", "manzana"=>"verde");
print_r(array_key_exists("pasto",$arreglo));
print "<br><br>";

print "6.array_search() Busca un valor determinado de un arreglo y devuelve la primera llave
correspondiente en caso de encontrarla<br>";
$arreglo= array("cielo"=>"azul", "pasto"=>"verde", "manzana"=>"verde");
print_r(array_search("pasto",$arreglo));
print "<br>";
print_r(array_search("azul",$arreglo));
print "<br>";
print_r(array_search("verde",$arreglo));
print "<br>";
?>