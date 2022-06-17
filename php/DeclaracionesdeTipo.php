<?php 
declare(strict_types=1);
function hola(bool $nombre){

print "hola ".$nombre;
}
/*
DECLARACIONES DE TIPO DEVOLUCION
function suma($n1,$n2):string{

    return $n1 + $n2;
}
var_dump(suma(100,2));
*/
class Gato{};
class Perro{};

function regresaGato(): Gato{

    return new Gato;

}
 
var_dump(regresaGato());
?>