<?php

session_start();
include('connection.php');

//PADRINHOS

$nome_padrinho = $_POST['nome_padrinho'];
$idade_padrinho = $_POST['idade_padrinho'];
$rg_padrinho = $_POST['rg_padrinho'];
$profissao_padrinho = $_POST['profissao_padrinho'];
$endereco_padrinho = $_POST['endereco_padrinho'];
$data_padrinho = $_POST['data_padrinho'];
$civil_padrinho = $_POST['civil_padrinho'];
$nacionalidade_padrinho = $_POST['nacionalidade_padrinho'];

//MADRINHA

$nome_madrinha = $_POST['nome_madrinha'];
$idade_madrinha = $_POST['idade_madrinha'];
$rg_madrinha = $_POST['rg_madrinha'];
$profissao_madrinha = $_POST['profissao_madrinha'];
$endereco_madrinha = $_POST['endereco_madrinha'];
$data_madrinha = $_POST['data_madrinha'];
$civil_madrinha = $_POST['civil_madrinha'];
$nacionalidade_madrinha = $_POST['nacionalidade_madrinha'];
$cadastrar = $_POST['cadastrar'];

$check_godmother = 0;
$check_godfather = 0;
if(empty($nome_madrinha) || empty($idade_madrinha) || empty($rg_madrinha) || empty($profissao_madrinha)  || empty($endereco_madrinha) || empty($data_madrinha) || empty($civil_madrinha) || empty($nacionalidade_madrinha)){
  $_SESSION['fielderrorrequired_godmother'] = "<div class='alert alert-danger'>Dados da madrinha foram preenchido incorretamente <span class='glyphicon glyphicon-edit'></span></div>";
  header("location:register_godfathers.php");
  $check_godmother = 1;
}
if(!isset($cadastrar) || empty($nome_padrinho) || empty($idade_padrinho) || empty($rg_padrinho) || empty($profissao_padrinho) || empty($endereco_padrinho) ||  empty($data_padrinho) ||  empty($civil_padrinho) || empty($nacionalidade_padrinho)){
  $_SESSION['fielderrorrequired_godfather'] = "<div class='alert alert-danger'>Dados do padrinho foram preenchido incorretamente <span class='glyphicon glyphicon-edit'></span></div>";
  header("location:register_godfathers.php");

  $check_godfather = 1;
}
if($check_godfather < 1 && $check_godmother < 1){
  $select = "SELECT rg FROM padrinhos_casamento WHERE rg = '$rg_padrinho' or rg = '$rg_madrinha'";
  $check = mysqli_query($connect, $select);
  if(mysqli_num_rows($check) > 0){
    $check_rg = mysqli_fetch_assoc($check);
    $_SESSION['rg_godfathers'] = $check_rg['rg'];
    $rg_used = $_SESSION['rg_godfathers'];
    $_SESSION['errorrg'] = "<div class='alert alert-danger'>Já existe usuário registrado com rg($rg_used) já esta registrado. <span class='glyphicon glyphicon-edit'></span></div>";
    header("location:register_godfathers.php");
  }else{
    $bride = $_SESSION['noiva'];
    $check_bride = "SELECT id_noiva, nome_noiva FROM cadastro_noiva where nome_noiva = '$bride'";
    $checking_bride = mysqli_query($connect, $check_bride);
    if(mysqli_num_rows($checking_bride) > 0){
      $assoc_bride = mysqli_fetch_assoc($checking_bride);
      $bride_id = $assoc_bride['id_noiva'];
      $insert_godfather = "INSERT INTO padrinhos_casamento(nome, idade, rg, profissao, endereco, data_nascimento, estado_civil, nacionalidade, fk_casamento) VALUES ('$nome_padrinho', '$idade_padrinho', '$rg_padrinho', '$profissao_padrinho', '$endereco_padrinho', '$data_padrinho', '$civil_padrinho', '$nacionalidade_padrinho', '$bride_id')";
      $inserting_godfather = mysqli_query($connect, $insert_godfather);
      if($inserting_godfather){
        $insert_godmother = "INSERT INTO padrinhos_casamento(nome, idade, rg, profissao, endereco, data_nascimento, estado_civil, nacionalidade, fk_casamento) VALUES ('$nome_madrinha', '$idade_madrinha', '$rg_madrinha', '$profissao_madrinha', '$endereco_madrinha', '$data_madrinha', '$civil_madrinha', '$nacionalidade_madrinha', '$bride_id')";
        $inserting_godmother = mysqli_query($connect, $insert_godmother);
        if($inserting_godmother){
          $_SESSION['endregistergodfathers'] = "<div class='alert alert-success'>Padrinho e Madrinha foram registrados com sucesso <span class='glyphicon glyphicon-ok'></span></div>";
          header("location:register_godfathers.php");
        }else{
          $_SESSION['endregistergodfathers'] = "<div class='alert alert-danger'>Padrinho cadastro, houve erro ao cadastrar madrinha, contate o Desenvolvedor: <span class='glyphicon glyphicon-remove'></span></div>";
          header("location:register_godfathers.php");
        }
      }else{
        echo "não deu";
      }
    }
  }
}

?>
