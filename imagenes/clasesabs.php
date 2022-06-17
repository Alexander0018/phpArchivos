<?php

use Gato as GlobalGato;

abstract class Mamifero{

    abstract public function saludo();


    public function maullar(){

        return "miau, miau";
    }
}

class Gato extends Mamifero{

    public function saludo()
    {
        return "Hola Mundo";
    }
}


$demo= new Gato();

print "saludo ".$demo->saludo()."<br>";
print "maular ".$demo->maullar()."<br>";
?>