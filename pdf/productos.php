<?php
include_once '../fpdf/fpdf.php';

$pdf = new FPDF();
$pdf -> AddPage('PORTRAIT' , 'letter');
$pdf -> SetFont('Arial' , 'B' , 20);
$pdf->Text(80, 30,'Lista de Productos');
$pdf -> Ln(40);
$pdf -> SetFont('Arial' , '' , 11);

$pdf -> Cell(50,9,''.$_POST['num'],1,0,'L',0);
$pdf -> Cell(50,9,''.$_POST['nombre'],1,0,'L',0);
$pdf -> Cell(50,9,''.$_POST['marca'],1,0,'L',0);
$pdf -> Cell(50,9,''.$_POST['precioanterior'],1,0,'L',0);
$pdf -> Cell(50,9 ,''.$_POST['precioanterior'],1,0,'L',0);
$pdf -> Cell(50,9 ,''.$_POST['color'],1,0,'L',0);

$pdf -> Output();





$csv = fopen("csv/productos.pdf","a+");
			
$texto = $id."|".$nombre."|".$marca."|".$precioactual."|".$precioanterior."|".$color.chr(13).chr(10);

fwrite($csv, $texto);

fclose($csv);





?>