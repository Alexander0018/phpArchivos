<?php

function Errores($nivel, $mensaje, $archivo, $linea, $contexto)
{
   echo "Eror nivel:".$nivel."<br>";
   echo "Mensaje:".$mensaje."<br>";
   echo "En el archivo:".$archivo."<br>";
   echo "En la linea:".$linea."<br>";
   echo "Contexto:".$contexto."<br>";

   //var_dump($contexto);
  error_log("Error: [$nivel] $mensaje", 1, "lolajgh@gmail.com", "From: lolajgh@gmail.com");
}

set_error_handler("Errores");
trigger_error("Este es un mensaje de error", E_USER_WARNING);

?>