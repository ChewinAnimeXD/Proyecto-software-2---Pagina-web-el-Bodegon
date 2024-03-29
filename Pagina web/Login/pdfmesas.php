<?php

require('fpdf/fpdf.php');
session_start();
$id = $_SESSION['id'];

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	
    // Arial bold 15
    $this->SetFont('Arial','B',14);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'RECIBO DE RESERVACIONES EL BODEGON',0,0,'C');
    
    // Salto de línea
    $this->Ln(20);

    $this->Cell(60,10,'Nombre',1,0,'C',0);
	$this->Cell(30,10,'fecha',1,0,'C',0);
	$this->Cell(30,10,'ciudad',1,0,'C',0); 
    $this->Cell(30,10,'mesa',1,0,'C',0); 
    $this->Cell(30,10,'hora',1,1,'C',0);    
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
}
}

require ("cn.php");
$consulta = "SELECT * FROM rmesas join usuarios using(id_usuario) where comparador_id_u = $id";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);

while ($row=$resultado->fetch_assoc()) {
	$pdf->Cell(60,10,$row['nombre'],1,0,'C',0);
	$pdf->Cell(30,10,$row['fecha'],1,0,'C',0);
	$pdf->Cell(30,10,$row['nombre_l'],1,0,'C',0);
    $pdf->Cell(30,10,$row['mesa'],1,0,'C',0);
    $pdf->Cell(30,10,$row['hora'],1,1,'C',0);

} 
	$pdf->Output();
?>