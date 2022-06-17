<?php
class BaseDatos extends SQLite3{
function __construct()
	{
		$this->open("libros.db");
	}
}
$errores = [];
$db = new BaseDatos();
if (!$db) {
	array_push($errores,"ERROR al abrir la base de datos 'libros'");
}
if(isset($_GET["id"])){
	$id = $_GET["id"];
	$q = "SELECT * FROM libros WHERE id=".$id;
	$r = $db->query($q);
	$row = $r->fetchArray(SQLITE3_ASSOC);
	//
	$nombre = $row["NOMBRE"];
	$autor = $row["AUTOR"];
	$anio = $row["ANIO"];
	$precio = $row["PRECIO"];
	$editorial = $row["EDITORIAL"];
	//
} else if (isset($_POST["id"])) {
	$errores = [];
	$id = $_POST["id"];
		
	//Borrar
	$q = "DELETE FROM libros WHERE id=".$id;
	//query
	$r = $db->exec($q);
	if ($r) {
		header("Location: ABC01.php");
	} else {
		array_push($errores,"ERROR al borrar en la base de datos 'libros'");
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Borrar el libro</title>
	<meta charset="utf-8"/>
	<style>
		body{ width:300px; margin:0 auto; }
		fieldset{ background: #ddd; }
		td{ text-align: right; }
		input{width: 100%;}
		table{width: 100%;}
		input[type=text]:focus{background: lightblue;}
		.rojo{color:red;}
	</style>
</head>
<body>
<form action="borrar.php" method="post">
<fieldset>
<legend>Borrar el libro</legend>
<table>
	<tr>
		<td><label for="nombre">Titulo:</label></td>
		<td><input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" disabled></td>
	</tr>
	<tr>
		<td><label for="autor">Autor:</label></td>
		<td><input type="text" name="autor" id="autor" value="<?php echo $autor; ?>" disabled></td>
	</tr>
	<tr>
		<td><label for="anio">Año:</label></td>
		<td><input type="text" name="anio" id="anio" value="<?php echo $anio; ?>" disabled></td>
	</tr>
	<tr>
		<td><label for="editorial">Editorial:</label></td>
		<td><input type="text" name="editorial" id="editorial" value="<?php echo $editorial; ?>" disabled></td>
	</tr>
	<tr>
		<td><label for="precio">Precio:</label></td>
		<td><input type="text" name="precio" id="precio" value="<?php echo $precio; ?>" disabled></td>
	</tr>
	<tr>
		<td><input type="hidden" name="id" id="id" value="<?php echo $id; ?>"></td>
		<td><input type="submit" name="enviar" id="enviar" value="Borrar"></td>
	</tr>
</table>
<p class="rojo">Cuidado: una vez borrado el registro, NO podrá recuperar la información</p>
<a href="ABC01.php">Regresar</a>
<?php
echo "<p class='rojo'>";
for ($i=0; $i < count($errores); $i++) { 
	echo $errores[$i]."<br>";
}
echo "</p>";
?>
</fieldset>
</form>
</body>
</html>