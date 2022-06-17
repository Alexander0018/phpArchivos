<!doctype html>
<html>
	<head>
	<style>
		body{
			width:960px;
			margin:0 auto;
		}
		table{
			width: 100%;
		}
		th{background: blue; color:white;}
		tr:nth-child(odd){background:gray;}
		h1{text-align: center;}
		.der{text-align: right;}
		.cen{text-align: center;}
	</style>
		<title>ABC Libros</title>
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
		<h1>Catálogo de libros</h1>
		<table><tr>
			<th>id</th>
			<th>Titulo</th>
			<th>Autor</th>
			<th>Año</th>
			<th>Editorial</th>
			<th>Precio</th>
			<th>Fecha</th>
			<th>Modificar</th>
			<th>Borrar</th>
		</tr>
		<?php
			//abc crud
			$sql ="SELECT * FROM libros ";
			if(isset($_GET['anio'])){
				$a = $_GET['anio'];
				if ($a!="todos") {
					$sql .= "WHERE anio=".$a.";";
				} 
			}
			//
		   $ret = $db->query($sql);
		   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
		   	echo "<tr>";
		      echo "<td class='cen'>". $row['id'] . "</td>";
		      echo "<td>". $row['NOMBRE'] ."</td>";
		      echo "<td>". $row['AUTOR'] ."</td>";
		      echo "<td class='cen'>".$row['ANIO'] ."</td>";
		      echo "<td>".$row['EDITORIAL'] ."</td>";
		      echo "<td class='der'>".number_format($row['PRECIO'],2) ."</td>";
		      echo "<td class='cen'>". $row['FECHA'] ."</td>";
		      //Modificar
		      echo "<td class='cen'>";
		      echo "<a href='modificar.php?id=".$row['id']."'>";
		      echo "<img src='lapis.png' width='16'/>";
		      echo "</a></td>";
		      //Borrar
		      echo "<td class='cen'>";
		      echo "<a href='borrar.php?id=".$row['id']."'>";
		      echo "<img src='x.png' width='16'/>";
		      echo "</a></td>";
		      echo "</tr>";
		   }
		   //
		   //abc crud
			$sql ="SELECT DISTINCT anio FROM libros;";
			//
		   $ret = $db->query($sql);
		 
		   echo "<form action='ABC01.php' method='get'>";
		   echo "<select id='anio' name='anio'>";
		   echo "<option value='todos'>Todos los años</option>";
		   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
		   	echo "<option value='".$row["ANIO"]."'>";
		    echo $row['ANIO'];
		    echo "</option>";
		   }
		   echo "<input type='submit' value='Filtrar'/>";
		   echo "</select>";
		   echo "</form>";
		   $db->close();
		?>
		</table>
		<a href="alta.php">Dar de alta un título</a>
	</body>
</html>