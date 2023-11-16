<?php
require('fpdf.php');

// Recibe los parámetros name y surname de la petición GET
$name = isset($_GET['name']) ? $_GET['name'] : 'Nombre';
$surname = isset($_GET['surname']) ? $_GET['surname'] : 'Apellido';

// Crea una  instancia de pdf
$pdf = new FPDF();
$pdf->AddPage();

// Configura la fuente, el tamaó y el color del texto
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(0, 0, 0); // El texto será de color negro

// Agregamos el título
$pdf->Cell(0, 10, 'Diploma de Desarrollo Web en Entorno Servidor', 0, 1, 'C');

// Agregamos las imágenes
$pdf->Image('logo1.jpg', 20, 40, 50, 0, 'JPG');
$pdf->Image('logo2.png', 140, 40, 50, 0, 'PNG');

// Agregamos el texto del pdf
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Se certifica que', 0, 1, 'C');
$pdf->Cell(0, 10, $name . ' ' . $surname, 0, 1, 'C');
$pdf->Cell(0, 10, 'ha completado con éxito el curso', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'Desarrollo Web en Entorno Servidor', 0, 1, 'C');
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Fecha del diploma: ' . date('Y-m-d'), 0, 1, 'C');

// Agregamos algunos detalles adicionales
$pdf->MultiCell(0, 10, 'Este diploma es una prueba de concepto y no tiene validez legal. Ha sido generado automáticamente con PHP y la librería FPDF.', 0, 'C');

// Generamos el PDF
$pdf->Output('DiplomaDesarrolloWeb.pdf', 'D');
echo $name;
echo $surname;

?>

