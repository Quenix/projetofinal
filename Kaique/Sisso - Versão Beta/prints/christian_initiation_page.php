<?php
session_start();
require('fpdf/fpdf.php');
require('date_extended.php');
include('../connection.php');


//FORMATTING DATE

//BRITH
$date_birth = $_SESSION['nascimento'];
$new_birth = explode("-", $date_birth);
$year_birth = date_extended($new_birth[0]);
$month_birth = month_extended($new_birth[1]);
$day_birth = date_extended($new_birth[2]);

//CELEBRATION DATE

$date_celebration = $_SESSION['celebracao'];
$new_celebration = explode("-", $date_celebration);
$year_celebration = date_extended($new_celebration[0]);
$month_celebration = month_extended($new_celebration[1]);
$day_celebration = date_extended($new_celebration[2]);

$dados = "Certificamos que no dia $day_celebration de $month_celebration do ano de Nosso Senhor de $year_celebration, de acordo com as prescrições Bíblicas e dos ensinamentos da Igreja Sirian Ortodoxa de Antioquia, ". $_SESSION['nome'] .", nascido(a) em $day_birth de $month_birth de $year_birth, na cidade de ". $_SESSION['naturalidade'].", Filho de ". $_SESSION['pai'] ." e ".$_SESSION['mae']." ";
$dados .= "Recebeu o Sacramento de ". $_SESSION['batismo'] .", ". $_SESSION['crisma'] . " e ". $_SESSION['eucaristia'] .", tendo como padrinhos ". $_SESSION['padrinho'] ." e ". $_SESSION['madrinha'] ."";

$pdf = new FPDF('P', 'mm', 'A4');

$pdf->AddPage();
$pdf->Image("../img/logo.png", 10, 10, 30);
$pdf->Image("../upload/".$_SESSION['logo_paroquia']."", 160, 10, 30);
$pdf->Image("../upload/".$_SESSION['carimbo_paroquia']."", 20, 150, 40, 50);

//Name of the curch
$pdf->SetFont('Arial','B',15);
$pdf->Cell(180,10,'IGREJA SIRIAN ORTODOXA ANTIOQUIA',0,0,'C');
$pdf->ln(7);

//Data of the parish

//Name Parish
$pdf->SetFont('Arial', 'BI', 10);
$pdf->Cell(180,10, utf8_decode('PARÓQUIA ORTODOXA DA PROTEÇÃO DA MÃE DE DEUS') /*.$_SESSION['nome_paroquia']*/, 0,0,'C');
$pdf->ln(4);


//Parish Comunity
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(175,10, $_SESSION['comunidade_paroquia'], 0,0,'C');
$pdf->ln(3);

//Address - CEP
$pdf->SetFont('Arial', '', 6);
$pdf->Cell(175,10, $_SESSION['endereco_paroquia']. " - CEP. " .$_SESSION['cep_paroquia'], 0,0,'C');
$pdf->ln(3);

//city, state, telephone
$pdf->SetFont('Arial', '', 6);
$pdf->Cell(175,10, $_SESSION['cidade_paroquia']. ", " .$_SESSION['estado_paroquia']. " - Telefone: " .$_SESSION['telefone_paroquia'], 0,0,'C');
$pdf->ln(3);

//site and e-mail
$pdf->SetFont('Arial', '', 6);
$pdf->Cell(175,10, $_SESSION['site_paroquia']. " / " .$_SESSION['email_paroquia'], 0,0,'C');
$pdf->ln(6);
$pdf->Cell(0,5,"","B",1,'C');
$pdf->ln(6);

//Title Certification Paroco

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(175,10, utf8_decode('CERTIDÃO DE INICIAÇÃO CRISTÃ'), 0,0,'C');
$pdf->ln(20);

//CUSTOMER DATA
$pdf->SetFont('arial','',12);
$pdf->MultiCell(0,6, utf8_decode($dados),0,'J');
$pdf->ln(120);

//ASSIGNATURE
$pdf->SetLeftMargin(65); //LEFT MARGIN OF THE ASSIGNATURE
$pdf->SetFont('arial', 'B', 12);
$pdf->Cell(80, 0, "", "B",0 ,'J');
$pdf->ln(2);

//ASSIGNATURE - PRIEST NAME
$pdf->SetFont('arial', 'BI', 10);
$pdf->Cell(80,05, $_SESSION['padre_paroquia'] ." - ". $_SESSION['nome_user'], 0,0,'C');
$pdf->ln(50);

$pdf->SetFont('arial', '', 05);
$pdf->Cell(80,0, utf8_decode("Esta Certidão e o Sacramento celebrado só será documentalmente válido se carimbado e assinado pelo pároco!."));

$pdf->Output("I", "Iniciacao_".$_SESSION['nome']."");
?>
