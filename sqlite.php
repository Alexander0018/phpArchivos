<?php

class BaseDatos extends SQLite3
{
    function __construct()
    {
       $this->open("libros.db");
    }
}

$db= new BaseDatos();

if ($db) {
  echo "<p>La base de datos 'libros' se abrio en forma exitosa";
}
else {
    echo "<p>Error al abrir la base de datos 'libros' se abrio en forma exitosa";
}

$q= <<<sql

CREATE TABLE if not exists libros
(id INTEGER  AUTOINCREMENT,
NOMBRE       text NOT NULL,
AUTOR        text NOT NULL,
AÑO          int DEFAULT 2001,
EDITORIAL    text DEFAULT "N.A.",
PRECIO real   DEFAULT 0,
FECHA text    CURRENT_TIMESTAMP,
UNIQUE(NOMBRE, AUTOR),
PRIMARY KEY(id,FECHA)

);
sql;

$r= $db->exec($q);
if ($r) {
    echo "<p>La tabla 'libros' se creo en forma exitosa";
  }
  else {
      echo "<p>Error al crear la tabla 'libros'";
  }

  $q= "DROP TABLE if exists alumnos;";
  $r= $db->exec($q);
  if ($r) {
    echo "<p>La tabla 'alumnos' se borro en forma exitosa";
  }
  else {
      echo "<p>Error al borrar la base tabla 'alumnos' ";
  }

  $db->close();
?>