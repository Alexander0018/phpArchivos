<?php


class Gato{

    const EDAD= 18;
    const PESO=<<<'EOT'
    20
 EOT;

 const UNO=1;
 const DOS= self::UNO + self::UNO;
 const TRES= self::UNO+ self::DOS;
 const SUMA= "Las vidas de los gatos son ".self::TRES * 3;
    function edadGato(){

        return self::EDAD;
    }
}

$benito= new Gato();
print "La edad maxima de los gatos es ".Gato::EDAD."<br>";

print "La edad maxima de los gatos es ".$benito->edadGato()."<br>";

$clase= "Gato";
print "El peso maximo de los gatos es ".$clase::PESO."<br>";
print $clase::SUMA;
?>