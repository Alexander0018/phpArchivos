<?php

$path = "alumnos2.json";

if (!file_exists($path))
    exit("File not found");

$data = file_get_contents($path);
$json = json_decode($data, true);

echo "<html><body><table border=1>";
echo "<tr><th>Alumno</th><th>Calificación</th></tr>";
for ($i=0; $i < count($json); $i++) { 
	$n = $json[$i]['nombre'];
	$c = $json[$i]['cali'];
	echo "<tr><td>".$n."</td><td>".$c."</td></tr>";
}
echo "</table></body></html>";
?>