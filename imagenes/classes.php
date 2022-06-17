<?php

class gato{
  function maullar()
  {
    print "el gato dice miau miau"."<br>";
  }
  function ronronear()
  {
    print "el gato ronronea"."<br>";
  }
  
}

$metodos= get_class_methods("gato");
foreach ($metodos as  $metodo) {
   print $metodo."<br>";
}



?>