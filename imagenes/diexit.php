<?php

if (file_exists("datos.txt")) {
    $archivo= fopen("datos.txt", "r");
} else {
   die("No existe el archivo 'datos.txt', no podemos continuar.");
}

print "Este mensaje no se despliega si hay un error.";



?>