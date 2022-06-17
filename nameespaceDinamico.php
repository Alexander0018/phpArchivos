<?php
namespace miNameespace;
class miClase{
    function __construct()
    {
        print "Hola desde la funcion constructora<br>";
    }
}

function miFuncion()
{
    print "Hola desde la funcion<br>";
}
const miConstante= "Hola";


$a= "minameEspace\miClase";

$clase= new $a;
$b= "minameEspace\miFuncion";
$b();
print constant("minameEspace\miConstante");
?>