<?php
if(empty($_POST['b1']))
{
	$uname=$_POST['uname'];
	$ph=$_POST['ph'];
	$pass=$_POST['password'];
	$passcon=$_POST['password_confirm'];
	$email=$_POST['email'];
	$add=$_POST['address'];	
require('fpdf.php');
$pdf= new FPDF();
$pdf->AddPage();
$pdf->Cell(80);
$pdf->SetFont('Arial','B',18);
$pdf->Cell(50,10,'Welcome',100,1,'C');
$pdf->Cell(50,10,'Name:',1,0);
$pdf->Cell(50,10,$uname,1,1);
$pdf->Cell(50,10,'Phone:',1,0);
$pdf->Cell(50,10,$ph,1,1);
$pdf->Cell(50,10,'	Password:',1,0);
$pdf->Cell(50,10,$pass,1,1);
$pdf->Cell(50,10,'Con_Pass:',1,0);
$pdf->Cell(50,10,$passcon,1,1);
$pdf->Cell(50,10,'Email:',1,0);
$pdf->Cell(50,10,$email,1,1);
$pdf->Cell(50,10,'Address:',1,0);
$pdf->Cell(50,10,$add,1,1);
$pdf->output();
}
?>