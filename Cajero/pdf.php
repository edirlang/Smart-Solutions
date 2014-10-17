<?php 

function crear_factura($cn, $factura, $fecha, $hora, $cliente, $vendedor, $productos, $subtotal, $iva, $total, $Efectivo,$pago){
  require('../pdf_imprimir/fpdf.php');
  $pdf = new FPDF();
  $pdf->AddPage();
  $pdf->SetFont('Arial','B',14);

  $pdf->Cell(0,5,'Smart-Solutions',0,1,'C'); 
  $pdf->Cell(0,5,'Nit: ',0,1,'C');
  $pdf->Cell(0,5,'Calle ',0,1,'C');
  $pdf->Cell(0,5,'Telefono ',0,1,'C');
  $pdf->Cell(0,5,'Regimen Comun',0,1,'C');

  $result = mysqli_query($cn,"SELECT * from clientes where Cedula = '".$cliente."'");
  $nom_cliente;
  while ($row = mysqli_fetch_assoc($result)) {
    if($row['Cedula']==$cliente){
      $nom_cliente = $row['Nombre']." ".$row['Apellido'];
    }
  }

  $result = mysqli_query($cn,"SELECT * from usuarios where Cedula = '".$vendedor."'");
  $nom_cajero;
  while ($row = mysqli_fetch_assoc($result)) {
    if($row['Cedula']==$vendedor){
      $nom_cajero = $row['Nombre']." ".$row['Apellido'];
    }
  }

  $pdf->SetFont('Arial','B',12);
  $pdf->Cell(0,5,'Factura.:'.$factura,0,1,'L');
  $pdf->Cell(0,5,'Feha: '.$fecha.'   hh:mm: '.$hora,0,1,'L');


  $pdf->Cell(0,5,'Cliente: '.$nom_cliente.' Nit o C.C. '.$cliente,0,1,'L');
  $pdf->Cell(0,5,'Vendedor: '.$nom_cajero.' NIT o C.C.'.$vendedor,0,1,'L');


  $pdf->Cell(20,5,'Codigo',1,0,'L');
  $pdf->Cell(20,5,'Nombre',1,0,'L');
  $pdf->Cell(20,5,'Cantidad',1,0,'L');
  $pdf->Cell(20,5,'vlr. und.',1,0,'L');
  $pdf->Cell(20,5,'iva.',1,0,'L');
  $pdf->Cell(20,5,'SubTotal',1,0,'L');

  $pdf->ln();

  foreach ($productos as $producto) {
    $pdf->Cell(20,5,'Celdad '.$producto[0],0,0,'L');
    $pdf->Cell(20,5,'Celdad '.$producto[5],0,0,'L');
    $pdf->Cell(20,5,'Celdad '.$producto[1],0,0,'L');
    $pdf->Cell(20,5,'Celdad '.$producto[2],0,0,'L');
    $pdf->Cell(20,5,'Celdad '.$producto[3],0,0,'L');
    $pdf->Cell(20,5,'Celdad '.$producto[4],0,0,'L');

    $pdf->ln();
  }



  $pdf->Cell(0,5,'SubTotal'.$subtotal,0,1,'R');
  $pdf->Cell(0,5,'IVA '.$iva,0,1,'R');
  $pdf->Cell(0,5,'Total '.$total,0,1,'R');

  if($pago = 'contado'){
    $Cambio = $Efectivo -$total;
    $pdf->Cell(0,5,'Efectivo '.$Efectivo,0,1,'R');
    $pdf->Cell(0,5,'Cambio '.$Cambio,0,1,'R');
  }

  $pdf->Cell(0,5,'Resolucion ',0,1,'D');  

    $pdf->Output();
}

?>