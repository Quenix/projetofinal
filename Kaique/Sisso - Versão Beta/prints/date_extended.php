<?php

require_once('number_extended.php');

function date_extended($value){

  $value_extended = extenso($value);

  //ARRUMAR ERROS DE PORTUGUÊS PARA OS NÚMEROS QUE ESTÃO ABAIXO
  if($value == 1100 || $value == 1200 || $value == 1300 || $value == 1400 || $value == 1500 || $value == 1600 || $value == 1700 || $value == 1800 || $value == 1900){
    $extension_formatted = str_replace("um mil e", "mil e ", $value_extended); //Arruma erro de português trocando o 'um mil e' pela 'por mil e',
    return $extension_formatted;
  }if ($value < 2000) {
    $extension_formatted = str_replace("um mil e", "mil", $value_extended); //Arruma erro de português retirando o e ,
    return $extension_formatted;
  }else{
    return $value_extended;
  }
}

function month_extended($value){

  switch($value){

    case 1:
    return "Janeiro";
    break;

    case 2:
    return "Fevereiro";
    break;

    case 3:
    return "Março";
    break;

    case 4:
    return "Abril";
    break;

    case 5:
    return "Maio";
    break;

    case 6:
    return "Junho";
    break;

    case 7:
    return "Julho";
    break;

    case 8:
    return "Agosto";
    break;

    case 9:
    return "Setembro";
    break;

    case 10:
    return "Outubro";
    break;

    case 11:
    return "Novembro";
    break;

    case 12:
    return "Dezembro";
    break;

    default:
    return "ERROR: CONTATE DESENVOVLER";
    break;
  }
}
 ?>
