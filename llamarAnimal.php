<?php

namespace Animal\Perro;

include "namespaceLlamar.php";


const NOMBRE= "Perro";
function comer(){

    print "Estoy comiendo, perro";
}
class Pasear{

    static function Paseo(){
        print "Estoy paseando, perro";
    }
}

//nombre no cualificado

comer();
Pasear::Paseo();

print NOMBRE."<br>";



?>