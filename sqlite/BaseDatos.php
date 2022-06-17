<?php
class BaseDatos extends SQLite3{
	function __construct()
	{
		$this->open("libros.db");
			$q = <<<sql
			SELECT 	l.id AS id,
					l.nombre AS titulo,
					l.anio AS anio, 
					l.idEditorial AS idEditorial,
					e.nombre AS editorial
			FROM	libros AS l,
					editoriales AS e
			WHERE	l.idEditorial = e.id
sql;
		
		//echo "<p>".$q."</p>";
		$r = $this->query($q);
		if (!$r) {
			echo "<p>ERROR al crear la tabla 'libros'</p>";
		}

		//Crear la tabla intermedia
		$q = <<<sql
		CREATE TABLE IF NOT EXISTS librosAutores
		(id integer PRIMARY KEY AUTOINCREMENT,
		idLibro integer,
		idAutor integer);
sql;
		//echo "<p>".$q."</p>";
		$r = $this->exec($q);
		if (!$r){
			echo "<p>ERROR al crear la tabla 'librosAutores'</p>";
		}

		//Crear la tabla autores
		$q = <<<sql
		CREATE TABLE IF NOT EXISTS autores
		(id integer PRIMARY KEY AUTOINCREMENT,
		nombre string,
		pais int,
		fechaNac string,
		nobel boolean);
sql;
		//echo "<p>".$q."</p>";
		$r = $this->exec($q);
		if (!$r){
			echo "<p>ERROR al crear la tabla 'autores'</p>";
		}

		//Crear la tabla editoriales
		$q = <<<sql
		CREATE TABLE IF NOT EXISTS editoriales
		(id integer PRIMARY KEY AUTOINCREMENT,
		nombre string,
		pais text);
sql;
		//echo "<p>".$q."</p>";
		$r = $this->exec($q);
		if (!$r) {
			echo "<p>ERROR al crear la tabla 'editoriales'</p>";
		}
	}//de la constructor
	public function insertarInicial()
	{
		$q = <<<sql
		INSERT INTO libros VALUES (NULL,
		'Cien Años de soledad',
		600, 
		1980,
		1);

		INSERT INTO libros VALUES (NULL,
		'La guerra del fin del mundo',
		190,
		1985,
		2);

		INSERT INTO libros VALUES (NULL,
		'La región más transparente',
		190,
		1995,
		3);

		INSERT INTO libros VALUES (NULL,
		'El lenguaje de programación C',
		210,
		1999,
		4);

		INSERT INTO libros VALUES (NULL,
		'El amor en los tiempos de cólera',
		544,
		2001,
		3);

		INSERT INTO libros VALUES (NULL,
		'El coronel no tiene quién le escriba',
		500,
		1999,
		9);



		INSERT INTO librosAutores VALUES (NULL,1,1);
		INSERT INTO librosAutores VALUES (NULL,2,2);
		INSERT INTO librosAutores VALUES (NULL,3,3);
		INSERT INTO librosAutores VALUES (NULL,4,4);
		INSERT INTO librosAutores VALUES (NULL,4,5);
		INSERT INTO librosAutores VALUES (NULL,5,1);

		INSERT INTO autores VALUES (NULL,
		'Gabriel García Márquez',
		'Colombia',
		'1927/03/06',
		1);

		INSERT INTO autores VALUES (NULL,
		'Mario Vargas Llosa',
		'Perú',
		'1936/03/28',
		1);

		INSERT INTO autores VALUES (NULL,
		'Carlos Fuentes',
		'México',
		'1928/11/11',
		0);

		INSERT INTO autores VALUES (NULL,
		'Dennis Ritchie',
		'Estados Unidos',
		'1941/09/09',
		0);

		INSERT INTO autores VALUES (NULL,
		'Brian Kernighan',
		'Estados Unidos',
		'1942/01/01',
		0);

		INSERT INTO editoriales VALUES (NULL,
		'Nueva Era',
		'México');

		INSERT INTO editoriales VALUES (NULL,
		'Alfaguara',
		'España');

		INSERT INTO editoriales VALUES (NULL,
		'Diana',
		'México');

		INSERT INTO editoriales VALUES (NULL,
		'Prentice Hall',
		'Estados Unidos');

		INSERT INTO editoriales VALUES (NULL,
		'Alfa Omega',
		'México');
sql;
		$r = $this->exec($q);
		if ($r) {
			echo "<p>Los registros se insertaron correctamente</p>";
		} else {
			echo "<p>ERROR al insertar los registros en la base de datos</p>";
		}
	}//Insertar datos inicial
	public function leeLibrosEditorial($filtro='')
	{
		if($filtro=="alias"){
			$q = <<<sql
			SELECT 	l.id AS id,
					l.nombre AS titulo,
					l.anio AS anio, 
					l.idEditorial AS idEditorial,
					e.nombre AS editorial
			FROM	libros AS l,
					editoriales AS e
			WHERE	l.idEditorial = e.id
sql;		
		} else if ($filtro=="cross") {
			$q = <<<sql
			SELECT l.*,e.*
			FROM libros as l
			CROSS JOIN editoriales as e;
sql;
		} else if ($filtro=="inner") {
			$q = <<<sql
			SELECT l.id AS id,
					l.nombre AS titulo,
					l.anio AS anio, 
					l.idEditorial AS idEditorial,
					e.nombre AS editorial 
			FROM libros as l
			INNER JOIN editoriales as e
			ON e.id = l.idEditorial;
sql;
		} else if ($filtro=="outer") {
			$q = <<<sql
			SELECT 	l.id AS id,
					l.nombre AS titulo,
					l.anio AS anio, 
					l.idEditorial AS idEditorial,
					e.nombre AS editorial 
			FROM libros as l
			LEFT OUTER JOIN editoriales as e
			ON e.id = l.idEditorial;
sql;
		}

		echo $q;
		$r = $this->query($q);
		if ($r) {
			echo "<p>Los registros leyeron correctamente</p>";
		} else {
			echo "<p>ERROR al leer los registros en la base de datos</p>";
		}
		return $r;
	}// leeLibros Editorial
}// de la clase
?>