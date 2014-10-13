<?php 
  require('../pdf_imprimir/fpdf.php');

  $pdf = new FPDF();
  $pdf->AddPage();
  $pdf->SetFont('Arial','B',14);
  $pdf->Cell(0,5,'Smart-Solutions',0,1,'C'); 
  $pdf->Cell(0,5,'Nit: ',0,1,'C');
  $pdf->Cell(0,5,'Calle ',0,1,'C');
  $pdf->Cell(0,5,'Telefono ',0,1,'C');
  $pdf->Cell(0,5,'Regimen Comun',0,1,'C');

  $pdf->SetFont('Arial','B',12);
  $pdf->Cell(0,5,'Factura.: 1',0,1,'L');
  $pdf->Cell(0,5,'Feha: dd/mm/aa   hh:mm',0,1,'L');

  $pdf->Cell(0,5,'Cliente:            Nit o C.C.  ',0,1,'L');
  $pdf->Cell(0,5,'Vendedor:   NIT o C.C.',0,1,'L');

  $pdf->Cell(20,5,'Codigo',1,0,'L');
  $pdf->Cell(20,5,'Nombre',1,0,'L');
  $pdf->Cell(20,5,'Cantidad',1,0,'L');
  $pdf->Cell(20,5,'vlr. und.',1,0,'L');
  $pdf->Cell(20,5,'iva.',1,0,'L');
  $pdf->Cell(20,5,'SubTotal',1,0,'L');

  $pdf->ln();

  for($i=0 ; $i < 4 ; $i++){
  	$pdf->Cell(20,5,'Celdad '.$i,0,0,'L');
  	$pdf->Cell(20,5,'Celdad '.$i,0,0,'L');
  	$pdf->Cell(20,5,'Celdad '.$i,0,0,'L');
  	$pdf->Cell(20,5,'Celdad '.$i,0,0,'L');
  	$pdf->Cell(20,5,'Celdad '.$i,0,0,'L');
  	$pdf->Cell(20,5,'Celdad '.$i,0,0,'L');

  	$pdf->ln();
  }

	$pdf->Cell(0,5,'SubTotal',0,1,'R');
	$pdf->Cell(0,5,'IVA ',0,1,'R');
	$pdf->Cell(0,5,'Total ',0,1,'R');

	$pdf->Cell(0,5,'Efectivo',0,1,'R');
	$pdf->Cell(0,5,'Cambio ',0,1,'R');

	$pdf->Cell(0,5,'Resolucion ',0,1,'C');  

  $pdf->Output('../Facturas/factura.pdf','I');
  
  ?>