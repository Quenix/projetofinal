<?php
  include('teste_number.php');
  include('connection.php');
  //take the date format dd/mm/yy
  $data = $_GET['data'];
  $data2 = $_GET['data2'];
  //exchange / for -

    $datanew = implode("-", array_reverse(explode("/", $data2)));
    echo $datanew;
    echo "preencha";

  
  //inserting into the bank
/*
  $mostrardados = "SELECT * FROM teste_date";
  $conecta = mysqli_query($connect, $mostrardados);
  $meses = array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');
  $days = array(
  01 => 'Primeiro',
  02 => 'Dois',
  03 => 'Três',
  04 => 'Quatro',
  05 => 'Cinco',
  06 => 'Seis',
  07 => 'Sete'
  );

  while($pegar = mysqli_fetch_array($conecta)){
    $dataMysql= $pegar['data_nascimento'];

    $data = explode("-", $dataMysql);

    $dia = $data[2];
    $mes = $data[1];
    $ano = $data[0];

    echo extenso($dia) ." de ". $meses[($mes)-1] ." de ". $ano;
  }


*/
 ?>
