<?php
class Gato{
  public $peso = "publico";
  private $genero = "private";
  protected $edad = "protegido";

  function iteracion(){
    print "Iteracion dentro de la clase"."<br>";
    foreach ($this as $clave => $valor) {
      print $clave." -> ".$valor."<br>";
    }
  }
}

$gato = new Gato();

$gato->iteracion();

print "<br>"."Iteracion fuera de la clase"."<br>";
    foreach ($gato as $clave => $valor) {
      print $clave." -> ".$valor."<br>";
    }
?>