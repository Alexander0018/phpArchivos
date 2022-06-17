<?php
	if(isset($_POST["nombre"])){
		$errores = [];
		$nombre = $_POST["nombre"];
		$autor = $_POST["autor"];
		$anio = $_POST["anio"];
		$precio = $_POST["precio"];
		$editorial = $_POST["editorial"];
		if($nombre=="") array_push($errores,"El campo 'titulo' es obligatorio");
		if($autor=="") array_push($errores,"El campo 'autor' es obligatorio");
		if(count($errores)==0){
			
			class BaseDatos extends SQLite3{
				function __construct()
				{
					$this->open("libros.db");
				}
			}
			$db = new BaseDatos();
			if (!$db) {
				array_push($errores, "ERROR al abrir la base de datos 'libros'");
			}
			//
			$r = $db->exec($q);
			if (!$r) {
				array_push($errores,"ERROR al crear la tabla 'libros'");
			}
			//Insertar
			$q = "INSERT INTO libros VALUES (NULL,";
			$q .= "'".$nombre."',";
			$q .= "'".$autor."',";
			$q .= "".$anio.","; 
			$q .= "'".$editorial."',";
			$q .= "".$precio.","; 
			$q .= "CURRENT_TIMESTAMP);";
			//echo "query: ".$q; 
			$r = $db->exec($q);
			if ($r) {
				header("Location: ABC02.php");
			} else {
				array_push($errores,"ERROR al insertar en la tabla 'libros'");
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Alta de libro</title>
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
<form action="alta.php" method="post">
<fieldset>
<legend>Alta de libro</legend>
<table>
	<tr>
		<td><label for="nombre">* Titulo:</label></td>
		<td><input type="text" name="nombre" id="nombre"></td>
	</tr>
	<tr>
		<td><label for="autor">* Autor:</label></td>
		<td><input type="text" name="autor" id="autor"></td>
	</tr>
	<tr>
		<td><label for="anio">Año:</label></td>
		<td><input type="text" name="anio" id="anio"></td>
	</tr>
	<tr>
		<td><label for="editorial">Editorial:</label></td>
		<td><input type="text" name="editorial" id="editorial"></td>
	</tr>
	<tr>
		<td><label for="precio">Precio:</label></td>
		<td><input type="text" name="precio" id="precio"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
	</tr>
</table>
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