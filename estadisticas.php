<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			width:350px;
			margin:0 auto;
		}
		table{
			width:100%;
		}
		th{background: blue; color:white;}
		tr:nth-child(odd){background:gray;}
		h1{text-align: center;}
		.der{text-align: right;}
		.cen{text-align: center;}
		th a{ color: white; text-decoration: none; }
	</style>
	<title>Estadisticas</title>
	<meta charset="utf-8"/>
	<?php
		class BaseDatos extends SQLite3{
			function __construct()
			{
				$this->open("libros.db");
			}
		}

		$db = new BaseDatos();
		if (!$db) {
			echo "<p>ERROR al abrir la base de datos 'libros'</p>";
		}
	?>
</head>
<body>
<form action="estadisticas.php" method="get">
<select name="col" id="col">
	<option value="0">Selecciona una columna</option>
	<option value="1">Por autor</option>
	<option value="2">Por editorial</option>
	<option value="3">Por año</option>
</select>
<select name="filtro" id="filtro">
	<option value="0">Selecciona filtro</option>
	<option value="1">Mayor a 1</option>
	<option value="2">Mayor a 2</option>
	<option value="3">Mayor a 3</option>
</select>
<input type="submit" value="Enviar">
</form>
<table>
<?php
$sql = "SELECT count(*) as num, max(precio) as max, min(precio) as min, AVG(precio) as promedio, SUM(precio) as suma, SUM(precio)/count(*) as promedio2, abs(random() % count(*)) as random FROM libros";
$ret = $db->query($sql);
$num = $ret->fetchArray();
$numLibros = $num['num'];
$min = $num['min'];
$max = $num['max'];
$suma = $num['suma'];
$promedio = $num['promedio'];
$promedio2 = $num['promedio2'];
$random= $num=['random'];
echo "El precio promedio: ".number_format($promedio,2)."<br>";
echo "<br>";
echo "Tenemos ".$numLibros." libros en la base de datos<br>";
echo "El precio mínimo: ".number_format($min,2)."<br>";
echo "El precio máximo: ".number_format($max,2)."<br>";
echo "La suma de todos los libros: ".number_format($suma,2)."<br>";
echo "Verificamos el promedio: ".number_format($suma/$numLibros,2)."<br>";
echo "Segundo promedio: ".number_format($promedio2,2)."<br>";
echo "Número aleatorio: ".$random."<br>";
echo "<br>";
//
if (isset($_GET["col"])) {
	$col = $_GET["col"];
	if($col==0) $columna="";
	if($col==1) $columna="autor";
	if($col==2) $columna="editorial";
	if($col==3) $columna="anio";
}
if (isset($_GET["filtro"])) {
	$filtro = $_GET["filtro"];
}
if($col>0){
	//$sql = "SELECT LOWER(".$columna.") as columna, count(*) as num  FROM libros GROUP BY ".$columna." HAVING num > ".$filtro." ORDER BY num DESC;";
	$sql= "SELECT " .$columna." as columna, length(".$columna.") as num FROM libros" ;
	$ret = $db->query($sql);
	//
	echo "<tr>";
	echo "<th>". $columna. "</td>";
	echo "<th>num</td>";
	echo "</tr>";
	while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
		echo "<tr>";
		echo "<td>". $row['columna'] . "</td>";
		echo "<td>". $row['num'] ."</td>";
		echo "</tr>";
	}
} else {
	echo "Debe de seleccionar una columna";
}

?>
</table>
</body>
</html>