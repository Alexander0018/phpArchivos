<?php
$host = "localhost";
$usuario = "root";
$clave = "mysql";
$db = "alumnos140410";
$conn = mysqli_connect($host, $usuario, $clave, $db) 
or die("Error al abrir la base de datos");
//
$archivo = "productos.csv";

function procesaCSV($archivo){
	$csv = fopen($archivo, "r");
	$headers = fgetcsv($csv);
	while (($row = fgetcsv($csv))!== false) {
		yield array_combine($headers, $row);
	}
	fclose($csv);
}

foreach (procesaCSV($archivo) as $row) {
	//
	$sql = "SELECT * FROM tipos WHERE tipo='".$row["tipo"]."'";
	//
	$r = mysqli_query($conn,$sql);
	//
	if (mysqli_num_rows($r)==0) {
		$sql = "INSERT INTO tipos VALUES(0,'";
		$sql.= $row["tipo"]."')";
		//
		$r = mysqli_query($conn,$sql);
		//
		$tipoId = mysql_insert_id();
		//
	} else {
		$rowTipo = mysqli_fetch_assoc($r);
		$tipoId = $rowTipo["id"];
	}

	//
	$sql = "SELECT * FROM paquetes WHERE paquete='".$row["idPaquete"]."'";
	//
	$r = mysqli_query($conn,$sql);
	//
	if (mysqli_num_rows($r)==0) {
		$sql = "INSERT INTO paquetes VALUES(0,'";
		$sql.= $row["idPaquete"]."')";
		//
		$r = mysqli_query($conn,$sql);
		//
		$idPaquete = mysql_insert_id();
		//
	} else {
		$rowPaquete = mysqli_fetch_assoc($r);
		$idPaquete = $rowPaquete["id"];
	}

	$sql = "INSERT INTO productos VALUES(0,";
	$sql.= $tipoId.", ";
	$sql.= "'".$row["nombre"]."',";
	$sql.= "'".$row["descripcion"]."',";
	$sql.= "'".$row["precio"]."',";
	$sql.= $idPaquete.",";
	$sql.= "'".$row["paquete"]."')"; //precio
	//
	if(!mysqli_query($conn,$sql)){
		print "Error en insertar<br>";
	} else {
		print $row['nombre']."<br>";
	}
}
?>