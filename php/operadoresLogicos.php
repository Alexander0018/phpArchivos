<?php 

$dinero= false;
$tiempo= true;

if($dinero or  $tiempo){

print "voy al cine";

}
else{

    print "me quedo en casa";
}
//otros operadores

/*
$archivo= @file('noexiste.php');

++$a pre-incremento, incrementa $a en uno, y luego retorna $a.
$a++ post-incremento, retorna $a, y luego incrementa $a en uno.
--$a pre-decremento, decrementa $a en uno, luego retorna $a
$a-- post- decremento, retorna $a, luego decrementa $a e uno.

*/ 
$a= 5 ;
print $a--;
print $a;
//operadores para arreglos

/*

$a + $b  union, union de $a y $b

$a== $b igualdad, TRUE si $a y $b tienen las mismas parejas clave/valor
$a=== $b identidad, TRUE si $a y $b tienen las mismas parejas clave/valor
        en el mismo orden y de los tipos

  $a != $b desigualdad, TRUE si $a no es igual a $b
  $a <> $b desigualdad, TRUE si $a no es igual a $b
  $a !== $b no-identidad, TRUE si $a no es identica a $b      

instanceof (operador de tipo)

*/
?>