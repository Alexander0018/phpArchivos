<?php
class Gato{
	public $bandera;
}
class Perro{
	public $bandera;
}
$gato1 = new Gato();
$gato2 = new Gato();
$gato3 = $gato1;
$perro1 = new Perro();

print "Comparamos elementos de la misma clase"."<br>";
print "gato1 == gato2 =>";
print ($gato1==$gato2)?"Verdadero":"Falso";
print "<br>";

print "gato1 != gato2 =>";
print ($gato1!=$gato2)?"Verdadero":"Falso";
print "<br>";

print "gato1 === gato2 =>";
print ($gato1===$gato2)?"Verdadero":"Falso";
print "<br>";

print "gato1 !== gato2 =>";
print ($gato1!==$gato2)?"Verdadero":"Falso";
print "<br>";

print "<br>";
print "Comparamos elementos de la misma clase a la misma referencia"."<br>";
print "gato1 == gato3 =>";
print ($gato1==$gato3)?"Verdadero":"Falso";
print "<br>";

print "gato1 != gato3 =>";
print ($gato1!=$gato3)?"Verdadero":"Falso";
print "<br>";

print "gato1 === gato3 =>";
print ($gato1===$gato3)?"Verdadero":"Falso";
print "<br>";

print "gato1 !== gato3 =>";
print ($gato1!==$gato3)?"Verdadero":"Falso";
print "<br>";

print "<br>";
print "Comparamos elementos de la diferente clase"."<br>";
print "gato1 == perro1 =>";
print ($gato1==$perro1)?"Verdadero":"Falso";
print "<br>";

print "gato1 != perro1 =>";
print ($gato1!=$perro1)?"Verdadero":"Falso";
print "<br>";

print "gato1 === perro1 =>";
print ($gato1===$perro1)?"Verdadero":"Falso";
print "<br>";

print "gato1 !== perro1 =>";
print ($gato1!==$perro1)?"Verdadero":"Falso";
print "<br>";
?>