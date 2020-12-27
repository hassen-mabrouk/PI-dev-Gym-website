<?php

require('fpdf.php');
 $db= new PDO('mysql:host=localhost;dbname=projet', 'root', '');
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    //$this->Image('logo.png',10,6);
    $this->SetFont('Arial','B',16);
    $this->ln();
    $this->SetFont('Times','',20);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(150,8,' Planning List ',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
 function headerTable(){
    $this->SetFont('Times','B',12);
    $this->Cell(50,10,'Id planning',1,0,'C');
    $this->Cell(55,10,'Catergorie',1,0,'C');
    $this->Cell(55,10,'Date de planning',1,0,'C');
    $this->Cell(55,10,'Coach',1,0,'C');
    $this->Cell(55,10,'Heure',1,0,'C');
    $this->ln();

 }
 function viewTable($db){
    $this->SetFont('Times','',12);
    $liste=$db->query('select * from Planning');
    while($data= $liste->fetch(PDO::FETCH_OBJ)){
        $this->Cell(50,10,$data->id_planning,1,0,'C');
        $this->Cell(55,10,$data->categorie,1,0,'L');
        $this->Cell(55,10,$data->date_planning,1,0,'L');
        $this->Cell(55,10,$data->coach,1,0,'L');
        $this->Cell(55,10,$data->heure,1,0,'L');
        $this->ln();
    }
 }
}
$pdf = new PDF();
//header
$pdf->AddPage('L','A4',0);
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();
?>
