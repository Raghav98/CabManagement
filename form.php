<?php
if(!empty($_POST['b1']))
{
	$uname=$_POST['uname'];
	$ph=$_POST['ph'];
	$pass=$_POST['password'];
	$passcon=$_POST['password_confirm'];
	$email=$_POST['email'];
	$add=$_POST['address'];	
require("fpdf.php");
$pdf=new FPDF;
$pdf->AddPage();
$pdf->SetFont("ARIAL","B",16)
$pdf->Cell(0,10,"welcome",0,1,C);
$pdf->output();
}
?>