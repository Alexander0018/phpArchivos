<?php
interface iMamifero{
  public function andar();
  public function decir();
}

class Gato implements iMamifero{
  public function andar(){
    return "camina";
  }
  public function decir(){
    return "miau, miau";
  }
}

class Delfin implements iMamifero{
  public function andar(){
    return "nada";
  }
  public function decir(){
    return "iu. iu";
  }
}

class Murcielago implements iMamifero{
  public function andar(){
    return "volar";
  }
  public function decir(){
    return "iiii, iiii";
  }
}

$gato = new Gato();
$delfin = new Delfin();
$murcielago = new Murcielago();

print "El gato ".$gato->andar()." y dice ".$gato->decir()."<br>";
print "El delfin ".$delfin->andar()." y dice ".$delfin->decir()."<br>";
print "El murcielago ".$murcielago->andar()." y dice ".$murcielago->decir()."<br>";
?>