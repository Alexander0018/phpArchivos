<?php
 class Gato{
  public function ronronear(){
    return "ronronear";
  }
  final function maullar(){
    return "miau, miau";
  }
}

class GatoVolador extends Gato{
  /*public function maullar(){
    return "miauuuuu, miauuuuu";
  }*/

  public function ronronear(){
    return "ron, ron, ron";
  }
}

$gatoVolador = new GatoVolador();

print "Maullar: ".$gatoVolador->maullar()."<br>";
print "Ronronear: ".$gatoVolador->ronronear()."<br>";
?>