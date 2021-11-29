<?php
include '../../../../Config/appConfig.php';
require('../../../../App/include/fpdf/fpdf.php');
$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
mysqli_select_db($conexion, DB_NAME);

class PDF extends FPDF
{
function Header()
{    $this->SetMargins(20, 25 , 30);

	$this->Image('../assets/img/logoD.png', 10,10,75);
	$this->SetFont('Arial','B',20);
	$this->Cell(160);
	$this->Cell(50,20,'Reporte de Usuarios | Dcompras',0,0,'C');
	$this->Ln(15);
	$this->SetFont('Arial','B',10);
	$this->Cell(270);
    $this->Cell(50,10,'Fecha de reporte: '.date('d-m-Y').'', 0, 'R');
	//$this->Cell(50, 10, 'Generado: '.date('d-m-Y').'', 0, 'R');
	$this->Ln(10);

	// Colores de los bordes, fondo y texto
    $this->SetDrawColor(222,227,221);
     $this->SetFillColor(200,220,255);
   // $this->SetTextColor(220,50,50);
    // Ancho del borde (1 mm)
   // $this->SetLineWidth(1);

	$this->Cell(20, 8, '# Registro' ,1,0,'C');
	$this->Cell(40, 8, 'Nombres' ,1,0,'C');
	$this->Cell(40, 8, 'Apellidos' ,1,0,'C');
	$this->Cell(50, 8, 'Correo' ,1,0,'C');
	$this->Cell(30, 8, 'F. Nacimiento' ,1,0,'C');
    $this->Cell(40, 8, 'Tipo de documento' ,1,0,'C');
	$this->Cell(40, 8, 'Num. de documento' ,1,0,'C');
    $this->Cell(30, 8, 'Perfil' ,1,0,'C');
	$this->Cell(30, 8, 'Direccion' ,1,0,'C');

	$this->Ln(2);
}
function Footer()
{
	// Posición: a 1,5 cm del final
	$this->SetY(-15);
	$this->SetFont('Arial','I',8);
	$this->Cell(0,10,'Pagina '.$this->PageNo().' / {nb}',0,0,'C');
}
}
// Creación del objeto de la clase heredada
//$pdf = new PDF();
$pdf = new PDF('L','mm','legal'); //Tamaño en forma Horizontal
$pdf->AliasNbPages();
$pdf->AddPage();
//$pdf = new FPDF('L','mm','legal'); //Tamaño en forma Horizontal
//$pdf = new FPDF('P','mm','letter'); //Tamaño Normal
//$pdf->AddPage();
//$title = 'Reporte de Usuarios';
//$pdf->SetTitle($title);
//$pdf->SetFont('Arial', '', 10);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$usuarios = mysqli_query($conexion,"SELECT * FROM usuario 
INNER JOIN tipodocumento ON usuario.idTipoDoc = tipodocumento.idTipoDoc 
INNER JOIN perfilusuario ON usuario.idPerfilUsuario = perfilusuario.idPerfilUsuario");
$item = 0;

while($usuarios2 = mysqli_fetch_array($usuarios)){
	$item = $item+1;
    $pdf->Cell(20, 8, $item, 0);
	$pdf->Cell(40, 8, $usuarios2['nombreUsuario'], 0);
	$pdf->Cell(40, 8, $usuarios2['apellidoUsuario'], 0);
	$pdf->Cell(50, 8, $usuarios2['correoUsuario'], 0);
    $pdf->Cell(30, 8, $usuarios2['fechaNacimiento'], 0);
    $pdf->Cell(40, 8, $usuarios2['nombreTipoDoc'], 0);
   	$pdf->Cell(40, 8, $usuarios2['documentoUsuario'], 0);
    $pdf->Cell(30, 8, $usuarios2['nombrePerfilUsuario'], 0);
   	$pdf->Cell(30, 8, $usuarios2['direccionUsuario'], 0);

	$pdf->Ln(5);
}
$pdf->Ln(8);
//$pdf->Cell(0, 10, 'Pagina: '.$pdf->PageNo(),0,0,'C');
//$pdf->Output('DCOMPRAS_reportes.pdf','D'); Descargar el archivo
$pdf->Output('DCOMPRAS_reportes.pdf','D'); //Ver en linea el documento
?>


