<?php
//Llamamos a la librer�a
require('./fpdf184/fpdf.php');

//Creamos el objeto
$pdf = new FPDF();

//A�adimos una p�gina
$pdf->AddPage();

//A�adimos la fuente
$pdf->SetFont('Arial','B',16);

//Creamos contenidos
$pdf->Cell(40,10,'�Hola, Mundo!');

//Le damos la salida al documento
$pdf->Output();
?>
