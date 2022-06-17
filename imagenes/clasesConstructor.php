<?php

use gato as GlobalGato;

class Gato{
	const EDAD=18;
	public static $clavesecreta= "12345";
	protected $nombre;
	private $colorPelo;
	private $corbata = "SI";

	function __construct($nombre="", $pelo="negro"){
		$this->nombre = $nombre;
		$this->colorPelo = $pelo;
	}
	function __destruct()
	{
		//print $this->nombre." dice: Adiós, mundo cruel"."<br>";
	}
       
 function setCorbata($c= "SI"){

	if ($c!="SI") {
    $corbata= "NO";
	}
	$this->corbata= $c;
 }
 static function despedida(){
	print "Adiós, Mundo cruel";
 }
 function getCorbata(){
	return $this->corbata;
 }
	 function maullar(){
		return "miau, miau";
	}

	function tieneCorbata(){
		return $this->nombre." ".$this->corbata." tiene corbata y su color de pelo es ".$this->colorPelo."<br>";
	}

	function saludo(){
		$cadena = "Hola, me llamo ".$this->nombre." y mi color de pelo es ";
		$cadena .= $this->colorPelo;
		return $cadena;
	}
}

class GatoVolador extends Gato{

function nombreGatoVolador()

{
	$this->despedida();
	return $this->nombre;
}
function maullar()
{
	print "Miau miau miau".self::$clavesecreta;
}


}

$cucho= new Gato("Cucho" , "rosa");
//instancias
$benito = new GatoVolador(" Benito","azul");

print $cucho->maullar()."<br>";
print $benito->maullar()."<br>";




print "El pariente de la clase Gato es ".get_parent_class("Gato")."<br>";
print "El pariente de la clase GatoVolador es ".get_parent_class("GatoVolador")."<br>";

print "<br>";

print is_subclass_of("Gato", "GatoVolador")?"Si": "No";
print "<br>";
/*print $cucho->nombre." dice ".$cucho->maullar()."<br>";
print $cucho->tieneCorbata();
print $cucho->saludo()."<br>";
*/
print $benito->nombreGatoVolador();
$cucho->setCorbata("NO");

print $cucho->tieneCorbata();
print $benito->tieneCorbata();

print "La clave secreta es ".Gato::$clavesecreta."<br>";
print $cucho->nombre."maulla asi: ".$cucho->maullar()."<br>";
print $cucho->nombre."maulla asi: ".$benito->maullar()."<br>";

$a= 10;
$b= $a;


$panza= $cucho;


?>