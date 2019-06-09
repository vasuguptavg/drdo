<?php
require_once("confi.php");
$db_handle = new DBController();
$result = $db_handle->runQuery("SELECT * FROM mini_pis_details");
$header = $db_handle->runQuery("SELECT * 
FROM `mini_pis_details` ");

require('fpdf/fpdf.php');
$pdf = new FPDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);		
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(38,12,$column_heading,1);
}
foreach($result as $row) {
	$pdf->SetFont('Arial','',12);	
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(38,12,$column,1);
}
$pdf->Output();
?>