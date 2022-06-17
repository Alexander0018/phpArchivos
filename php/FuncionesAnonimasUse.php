<?php 

$mensaje = "hola";
//sin el "use"


$ejemplo= function ()
{

};

$ejemplo();
print "<hr>";
//Utilizando Use


$ejemplo = function() use($mensaje){

var_dump($mensaje);
};

$ejemplo();
print "<hr>";
//Utilizando Use por referencia 

$mensaje = "Adiós";
$ejemplo = function() use(&$mensaje){

    var_dump($mensaje);
    };
    
    $ejemplo();

    print "<hr>";
//Utilizando Use por argumentos

$mensaje = "Buenas Tardes";
$ejemplo = function($arg) use(&$mensaje){

    var_dump($arg.", ".$mensaje);
    };
    
    $ejemplo("Pedro");
?>