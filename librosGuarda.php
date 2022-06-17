<?php

$path = "libros2.xml";

$writer = new XMLWriter();
$writer->openURI($path);
$writer->startDocument('1.0');

$writer->startElement('libros');

$writer->startElement('libro');
$writer->writeAttribute('nombre', 'El llano en llamas');
$writer->writeAttribute('autor', 'Juan Rulfo');
$writer->writeAttribute('editorial', 'Era');
$writer->writeAttribute('fecha', '1999');
$writer->writeAttribute('paginas', '200');
$writer->writeAttribute('precio', '200.00');
$writer->endElement();

$writer->startElement('libro');
$writer->writeAttribute('nombre', 'La región más transparente');
$writer->writeAttribute('autor', 'Carlos Fuentes');
$writer->writeAttribute('editorial', 'Diana');
$writer->writeAttribute('fecha', '1990');
$writer->writeAttribute('paginas', '350');
$writer->writeAttribute('precio', '300.00');
$writer->endElement();

$writer->endElement();

$writer->endDocument();

$writer->flush();

?>