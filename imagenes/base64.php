<?php

$cadena= "En el agua clara que brota en la fuente, un lindo pescado, sale de repente";
print "<pre>".$cadena."</pre><br>";
$cadena= base64_encode($cadena);
print "<pre>".$cadena."</pre><br><br>";
$cadena= "<pre>".base64_decode($cadena)."</pre><br><br>";
print $cadena."<br>";


?>