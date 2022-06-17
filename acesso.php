<?php

$usuario= $_POST["usuario"];
$clave= $_POST["clave"];

if (strcmp($usuario, "pedro")==0 and strcmp($clave, "picapiedra")==0) {
     session_start();
     $_SESSION["acceso"]=time();
     print "Acesso Aprobado<br>";
     print "<a href='privado.php'>Acceso a información condifencial</a>";
} else {
  print "Acesso no autorizado";
}



?>

