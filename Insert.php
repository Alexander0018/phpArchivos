<?php
	class BaseDatos extends SQLite3{
		function __construct()
		{
			$this->open("libros.db");
		}
	}

	$db = new BaseDatos();
	if ($db) {
		echo "<p>La base de datos 'libros' se abrio en forma exitosa</p>";
	} else {
		echo "<p>ERROR al abrir la base de datos 'libros'</p>";
	}

	$q = <<<sql
	CREATE TABLE if not exists libros
	(id INTEGER PRIMARY KEY AUTOINCREMENT,
	NOMBRE    text NOT NULL,
	AUTOR     text NOT NULL,
	ANIO      int  DEFAULT 2001,
	EDITORIAL text DEFAULT "N.A.",
	PRECIO    real DEFAULT 0,
	FECHA	  text CURRENT_TIMESTAMP);
sql;
	$r = $db->exec($q);
	if ($r) {
		echo "<p>La tabla 'libros' se creo en forma exitosa</p>";
	} else {
		echo "<p>ERROR al crear la tabla 'libros'</p>";
	}
	//Insertar
	$q = <<<sql
	INSERT INTO libros VALUES (NULL,
	'Rayuela',
	'Julio Cortazar' , 
	1998,
	'Diana', 
	180.50,
	CURRENT_TIMESTAMP);

	INSERT INTO libros VALUES (NULL,
	'El laberinto de la soledad',
	'Octavio Paz' , 
	2000,
	'Fondo de cultura', 
	190.50,
	CURRENT_TIMESTAMP);

	INSERT INTO libros VALUES (NULL,
	'La región más transparente',
	'Carlos Fuentes' , 
	1980,
	'Fondo de cultura', 
	290.50,
	CURRENT_TIMESTAMP);
sql;
	$r = $db->exec($q);
	if ($r) {
		echo "<p>Se insertaron los registros en forma exitosa</p>";
	} else {
		echo "<p>ERROR al insertar en la tabla 'libros'</p>";
	}
	//
	$sql =<<<sql
      SELECT * FROM libros;
sql;
	//
   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "ID = ". $row['id'] . "<br>";
      echo "Nombre = ". $row['NOMBRE'] ."<br>";
      echo "Autor = ". $row['AUTOR'] ."<br>";
      echo "Fecha = ". $row['FECHA'] ."<br>";
      echo "Año =  ".$row['ANIO'] ."<br><br>";
   }
	//Drop table
   /*
	$q = "DROP TABLE if exists libros;";
	$r = $db->exec($q);
	if ($r) {
		echo "<p>La tabla 'libros' se borro en forma exitosa</p>";
	} else {
		echo "<p>ERROR al borrar la tabla 'libros'</p>";
	}
	//
	*/
	$db->close();
?>