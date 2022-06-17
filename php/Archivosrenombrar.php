<?php

touch("datos.txt");
if (copy("datos.txt","datos1.txt")) {
    print "Copia de archivo correcta";
}
else {
    print "Error al copiar el archivo";
}
print "<br><br>";

if (copy("datos.txt","imagenes/datos1.txt")) {
    print "Copia de archivo a imagenes correcta";
}
else {
    print "Error al copiar  a imagenes el archivo";
}
print "<br><br>";

if (@rename("datos1.txt","datos2.txt")) {
    print "Renombre de archivo correcta";
}
else {
    print "Error al renombrar el archivo";
}
print "<br><br>";

if (@rename("datos2.txt","imagenes/datos3.txt")) {
    print "Copia de archivo correcta";
}
else {
    print "Error al copiar el archivo";
}
print "<br><br>";

if (@rename("datos.txt","imagenes/datos.txt")) {
    print "Mover  archivo correcta";
}
else {
    print "Error al mover el archivo";
}
print "<br><br>";
?> 