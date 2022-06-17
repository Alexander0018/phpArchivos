<!DOCTYPE html>
<html>
<head>
	<title>Manejo de cadenas | strlen()</title>
	<meta charset="utf-8">
</head>
<body>
<?php  
$cadena1 = "En el agua clara, que brota en la fuente, un lindo pescado sale de repente";
$cadena2 = "a";

$pos = 0;
$pos_array= array();
while ($pos = strpos($cadena1, $cadena2, $pos)) {
    array_push($pos_array,$pos);
    $pos++;
}
print "<p>El número de ocurrencias de la cadena '".$cadena2." ''en la '".$cadena1." '' es de ".count($pos_array). " veces.</p>";
foreach ($pos_array as $key => $value) {
    print "Posicion ".$key." =>".$value."</p>";
}





















/*$r= strstr($cadena1,$cadena2);
if ($r) {
    print "si se encontro la subcadena '".$cadena2."' en la cadena '".$cadena1."'";
} else {
    print "no se encontro la subcadena '".$cadena2."' en la cadena '".$cadena1."'";
}
for ($i=0; $i < strlen($cadena1); $i++) { 
	$cadena2 = $cadena1[$i].$cadena2;
}
print "<p>".$cadena1."</p>";
print "<p>".$cadena2."</p>";
print "<p>La longitu de la cadena es de ".strlen($cadena1)." caracateres</p>";
*/
?>
</body>
</html>