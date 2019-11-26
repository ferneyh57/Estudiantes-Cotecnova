<?php
require('../reportes_pdf/fpdf/fpdf.php');

	class PDF extends FPDF
	{
		function Header()
		{
			//$this->Image('images/logo.png', 5, 5, 30 );
			$this->SetFont('Arial','B',13);
			$this->Cell(30);
			$this->Cell(120,10, 'Reporte De Estados',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-30);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}

// Creación del objeto de la clase heredada

?>

