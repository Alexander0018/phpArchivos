<?php

function saludo(&$nombre){
$nombre.= ", bueno dias";
}

$nombre= "Pedro  Picapiedra";
saludo($nombre);
print $nombre;

//

$fruta= array("manzana", "pera");

function frutas(&$fruta){
array_push($fruta, "uvas");

}

frutas($fruta);
var_dump($fruta);
?>