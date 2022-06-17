<?php
//Llamamos a la librer�a
require('./fpdf181/fpdf.php');

class PDFXML extends FPDF
{
	// Cabecera de p�gina
	function Header()
	{
		// Logo
		$this->Image('./fpdf181/tutorial/logo.png',10,8,33);
		// Arial bold 15
		$this->SetFont('Arial','B',15);
		// Movernos a la derecha
		$this->Cell(80);
		// T�tulo
		$this->Cell(30,10,'FPDF',1,0,'C');
		// Salto de l�nea
		$this->Ln(20);
	}

	// Pie de p�gina
	function Footer()
	{
		// Posici�n: a 1,5 cm del final
		$this->SetY(-15);
		// Arial italic 8
		$this->SetFont('Arial','I',8);
		// N�mero de p�gina
		$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
	}
}
// Creacion del objeto de la clase heredada
$pdf = new PDFXML();
//Alias para el n�mero de paginas
$pdf->AliasNbPages();
//Añade pagina
$pdf->AddPage();
//Establece la fuente
$pdf->SetFont('Times','',12);
//Imprime celdas
for($i=1;$i<=40;$i++){
	$pdf->Cell(0,10,'Imprimiendo linea numero '.$i,0,1);
}
//Salida de la pagina
$pdf->Output();


?>
