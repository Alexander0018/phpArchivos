<?php



class Gato{

    function maullar()
    {
       return "miau, miau";
    }
}

$cucho= new Gato();

$benito= new Gato();
$espanto= new Gato();


print "Espanto pertenece a la clase".get_class($espanto)."<br>";

print "Cucho";
if (is_a($cucho,"Gato")) {
    print "Si es un gato"."<br>";
} else 
    print "No es un gato"."<br>";


    print "Cucho dice ". $cucho->maullar()."<br>";
    print "Benito dice ". $benito->maullar()."<br>";
    print "Espanto dice ". $espanto->maullar()."<br>";
?>