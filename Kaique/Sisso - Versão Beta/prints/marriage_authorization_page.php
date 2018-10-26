<?php
session_start();
require('fpdf/fpdf.php');
require('date_extended.php');
include('../connection.php');


//BAPTISM HUSBAND

$date_husband = $_SESSION['data_batismo_noivo'];
$date_baptism_husband = explode("-", $date_husband);
$year_baptism_husband = date_extended($date_baptism_husband[0]);
$month_baptism_husband = month_extended($date_baptism_husband[1]);
$day_baptism_husband = date_extended($date_baptism_husband[2]);

//HUSBAND DATA

$dados_noivo = "  ".$_SESSION['nome_noivo']." nascido em ". $_SESSION['cidade_nascimento_noivo'] ." de estado civil ". $_SESSION['estado_civil_noivo'] .", tendo como profissão ". $_SESSION['profissao_noivo'] ."";
$dados_noivo .= " Filho de ". $_SESSION['pai_noivo'] ." e ". $_SESSION['mae_noivo'].", residente e domiciliado em ". $_SESSION['residencia_noivo'] ." . Batizado na Paroquia ". $_SESSION['paroquia_batizado_noivo'] ." em $day_baptism_husband de $month_baptism_husband de $year_baptism_husband, Portador do RG Nº: ". $_SESSION['rg_noivo'] ."";

//WIFE BAPTISM

$date_wife = $_SESSION['data_batismo_noiva'];
$date_baptism_wife = explode("-", $date_wife);
$year_baptism_wife = date_extended($date_baptism_wife[0]);
$month_baptism_wife = month_extended($date_baptism_wife[1]);
$day_baptism_wife = date_extended($date_baptism_wife[2]);

//BRIDE DATA

$dados_noiva = "  ".$_SESSION['nome_noiva']." nascida em ". $_SESSION['cidade_nascimento_noiva'] ." de estado civil ". $_SESSION['estado_civil_noiva'] .", tendo como profissão ". $_SESSION['profissao_noiva'] ."";
$dados_noiva .= " Filha de ". $_SESSION['pai_noiva'] ." e ". $_SESSION['mae_noiva'].", residente e domiciliada em ". $_SESSION['residencia_noiva'] ." . Batizada na Paroquia ". $_SESSION['paroquia_batizada_noiva'] ." em $day_baptism_wife de $month_baptism_wife de $year_baptism_wife, Portador do RG Nº: ". $_SESSION['rg_noiva'] ."";

$pdf = new FPDF('P', 'mm', 'A4');

$pdf->AddPage();
$pdf->Image("../img/logo.png", 10, 10, 30);
$pdf->Image("../upload/logotipo.png", 160, 10, 30);
//$pdf->Cell(80);

//Nome da igreja
$pdf->SetFont('Arial','B',15);
$pdf->Cell(180,10,'IGREJA SIRIAN ORTODOXA ANTIOQUIA',0,0,'C');
$pdf->ln(7);
//$pdf->Cell(10);

//Dados da Paróquia

//Nome Paróquia
$pdf->SetFont('Arial', 'BI', 10);
$pdf->Cell(180,10, utf8_decode('PARÓQUIA ORTODOXA DA PROTEÇÃO DA MÃE DE DEUS') /*.$_SESSION['nome_paroquia']*/, 0,0,'C');
$pdf->ln(4);


//Comunidade Pároquia
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(175,10, $_SESSION['comunidade_paroquia'], 0,0,'C');
$pdf->ln(3);

//Endereço - CEP
$pdf->SetFont('Arial', '', 6);
$pdf->Cell(175,10, $_SESSION['endereco_paroquia']. " - CEP. " .$_SESSION['cep_paroquia'], 0,0,'C');
$pdf->ln(3);

//Cidade, Estado - Telefone
$pdf->SetFont('Arial', '', 6);
$pdf->Cell(175,10, $_SESSION['cidade_paroquia']. ", " .$_SESSION['estado_paroquia']. " - Telefone: " .$_SESSION['telefone_paroquia'], 0,0,'C');
$pdf->ln(3);

//Site e email - OPCIONAL
$pdf->SetFont('Arial', '', 6);
$pdf->Cell(175,10, $_SESSION['site_paroquia']. " / " .$_SESSION['email_paroquia'], 0,0,'C');
$pdf->ln(6);
$pdf->Cell(0,5,"","B",1,'C');
$pdf->ln(6);

//Bispo
$pdf->SetFont('Arial', 'BI',12);
$pdf->Cell(20,10, utf8_decode('Sua Eminência'), 0,0,'J');
$pdf->ln(6);
//Bispo Nome
$pdf->SetFont('Arial', 'BI',12);
$pdf->Cell(20,10, utf8_decode($_SESSION['bispo_paroquia']), 0,0,'J');
$pdf->ln(6);

//Patente
$pdf->SetFont('Arial','BI', 12);
$pdf->Cell(105,10, utf8_decode('Arcebispo das Igrejas de Missão Sirian Ortodoxa de Antioquia no Brasil'), 0,0,'J');
$pdf->ln(12);

//benção
$pdf->SetFont('Arial', 'BI', 12);
$pdf->Cell(15,10, utf8_decode('Sua Benção.'), 0,0,'J');
$pdf->ln(10);

$pdf->SetFont('Arial', '',12);
$pdf->MultiCell(0,6, utf8_decode("Venho por meio desta requerer junto ao Governo Central da Igreja Sirian Ortodoxa de Antioquia no
Brasil, que se digne autorizar a celebração do Matrimônio de Efeito Civil de:"), 0,'C');
$pdf->ln(6);

//HUSBAND DATA
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(0,6, utf8_decode($dados_noivo) ,0,'J');
$pdf->SetFont('Arial', 'BI', 12);
$pdf->Cell(175,15, ("E"), 0,0,'C');
$pdf->ln(15);

//WIFE DATA
$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0,6, utf8_decode($dados_noiva) ,0,'J');
$pdf->ln(12);

//
$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0,6, utf8_decode("  Foram entregues as documentações exigidas pela Lei Brasileira e pela Igreja necessárias para cumprei as exigências do Processo Matrimonial.
Atendendo as exigências do Processo Matrimonial, solicito à Sua Eminência que se digne autorizar a celebração do Sacramento do Matrimonio       Efeito Civil, que se realizará no dia       às      , na
cidade de       no      ."), 0,'J');
$pdf->ln(50);

//ASSIGNATURE
$pdf->SetLeftMargin(65); //LEFT MARGIN OF THE ASSIGNATURE
$pdf->SetFont('arial', 'B', 12);
$pdf->Cell(80, 0, "", "B",0 ,'J');
$pdf->ln(2);

//ASSIGNATURE - PRIEST NAME
$pdf->SetFont('arial', 'BI', 10);
$pdf->Cell(80,05, $_SESSION['padre_paroquia'] ." - ". $_SESSION['nome_user'], 0,0,'C');
$pdf->ln(50);


$pdf->Output();
?>
