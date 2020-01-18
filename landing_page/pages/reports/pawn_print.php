<?php

include('../../assets/fpdf/fpdf.php');

$fpdf = new FPDF;

$fpdf->AddPage();

$fpdf->SetFont('Arial','',8.5);
$fpdf->SetX(10);
$fpdf->Write(0,'Processed By: XXX');

$fpdf->SetX(75);
$fpdf->Write(0,'OPEN Monday - Sunday 08:00 AM to 05:00 PM');

$fpdf->SetX(170);
$fpdf->Write(0,date('Y-m-d H:i:s'));

$fpdf->SetFont('Arial','',13);
$fpdf->SetXY(97,20);
$fpdf->Write(0,'Sanglaan');

$fpdf->SetFont('Arial','',10);
$fpdf->SetXY(20,30);
$fpdf->Write(0,'ORIGINAL');

$fpdf->SetFont('Arial','',7);
$fpdf->SetXY(98,28);
$fpdf->Write(0,'Daet A. Branch');

$fpdf->SetXY(94,32);
$fpdf->Write(0,'Daet, Camarines Norte');

$fpdf->SetXY(90,36);
$fpdf->Write(0,'FOR INQUIRY Call/Text 1234');

$fpdf->SetXY(94,40);
$fpdf->Write(0,'TIN 11111111 Non-Vat');

$fpdf->SetFont('Arial','',10);
$fpdf->SetXY(170,30);
$fpdf->Write(0,'PT 00001');

$fpdf->SetFont('Arial','',8);
$fpdf->SetXY(5,45);
$fpdf->Write(0,'Date Loan Granted: '.date('M d, Y', strtotime($_GET['transaction_date'])));

$fpdf->SetXY(163,45);
$fpdf->Write(0,'Maturity Date: '.date('M d, Y', strtotime($_GET['maturity_date'])));
$fpdf->SetXY(142,50);
$fpdf->Write(0,'Loan Redemption Expiry Date: '.date('M d, Y', strtotime($_GET['expiration_date'])));

$fpdf->SetXY(10,55);
$fpdf->Write(5,'Pawnee '.$_GET['customer'].', residing at Brgy. VI, Daet Camarines NOrte for a loan of SIX THOUSAND PESOS (P 6,000.00), with three percent (3.00%) interest per month pledged in security for the loan as described and appraised at SIX THOUSAND PESOS (P 6,000.00), subject to the terms and conditions of the pawn.');

$fpdf->Output();
?>