<?php
include "./BaseDatos.php";
$db = new BaseDatos();
if (!$db) {
	echo "<p>ERROR al abrir la base de datos 'libros'</p>";
}
//$db->insertarInicial();
$ret = $db->leeLibrosEditorial("outer");
echo "<h1>Libros</h1>";
echo "<table>";
while($libros = $ret->fetchArray(SQLITE3_ASSOC) ){
  echo "<tr>";
  foreach ($libros as $key => $value) {
    echo "<td>".$libros[$key] ."</td>";
  }
  /*
  echo "<td class='cen'>". $libros['id'] ."</td>";
  echo "<td>".$libros['titulo'] ."</td>";
  echo "<td>".$libros['anio'] ."</td>";
  echo "<td>".$libros['idEditorial'] ."</td>";
  echo "<td>".$libros['editorial'] ."</td>";
  */
  echo "</tr>";
}
echo "</table>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Base de datos de libros</title>
	<meta charset="utf-8"/>
</head>
<body>
</body>
</html>