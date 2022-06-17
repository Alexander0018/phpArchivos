<?php


$titulo= filter_input(INPUT_GET, "buscar",FILTER_SANITIZE_SPECIAL_CHARS);

$buscar= filter_input(INPUT_GET, "buscar", FILTER_SANITIZE_ENCODED);

print "Tu busqueda: ".$titulo."<br>";
print "<a href='http://www.gogle.com?q=".$buscar."'>Buscar</a>";

?>