<?php
session_start();
include('connection.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$confsenha = md5($_POST['confsenha']);
$nivel = $_POST['OptionLevel'];
$cadastrar = $_POST['cadastro'];

if(!isset($cadastrar) || (empty($nome)) || (empty($email)) || (empty($senha)) || (empty($confsenha)) || (empty($nivel)) ){
  echo "ERROR, VOU ARRUMAR";
}else{
  # DANDO SELECT NA COLUNA EMAIL_USER PARA VER SE EXISTE MESMO EMAIL
  $query_select = "SELECT email_user FROM usuarios WHERE email_user = '$email'";

  # FAZ CONEXÃO DO $query_select E $connect(NOSSO BANCO DE DADOS)
  $select = mysqli_query($connect, $query_select) or die("ERROR: CONNECT AND SELECT");

  # PEGA O EMAIL DA TABELA CADASTRO_USER
  while( $array =  mysqli_fetch_array($select) ){
    $lista = $array['email_user'];
  }
  if($senha != $confsenha){
    $_SESSION ['msgreg'] = "<div class='alert alert-warning'>Senhas digitadas não conferem</div>";
    header("location: register_user.php");
  }else{
    if($email ==""){
      $_SESSION ['emailinvalid'] = "<div class='alert alert-danger'>E-mail Inválido</div>";
      header("Location: register_user.php");
    }else{
      if($email == $lista){
        $_SESSION ['emailinvalid'] = "<div class='alert alert-danger'>E-mail já cadastrado</div>";
        header("location: register_user.php");
      }else{
        $query_insert = "INSERT INTO usuarios (nome_user, email_user, senha, nivel) values('$nome', '$email', '$senha', '$nivel')" or die(mysqli_error());
        $insert = mysqli_query($connect, $query_insert) or die(mysqli_error());
        if($insert){
          $_SESSION ['registerend'] = "<div class='alert alert-success'>Cadastrado com Sucesso, Aguarde Aprovação</div>";
          header("location:login.php");
        }else{
          $_SESSION ['registerend'] = "<div class='alert alert-danger'>ERROR: CONTATE O ADMINISTRADOR DO SISTEMA</div>";
          header("location:login.php");
        }
      }
    }
  }
}
?>
