<?php
  session_start();

  include('connection.php');


  $email = $_POST ['email'];
  $senha = md5($_POST ['senha']);
  $entrar = $_POST['access'];

  if(isset($entrar)){

    $validate_log = "SELECT id_user, email_user, senha, nivel FROM usuarios where email_user = '$email' and senha = '$senha'";
    $con =  mysqli_query($connect, $validate_log);
    $check = mysqli_num_rows($con);
    if($check <= 0){
      $_SESSION['errorlogin']="<div class='alert alert-danger'>E-mail e/ou Senha inválidas<span class='glyphicon glyphicon-remove'></span></div>";
      header("location:index.php");
    }else{
      $result = mysqli_fetch_assoc($con);
      $_SESSION['id'] = $result['id_user'];
      $_SESSION['email'] = $result['email_user'];
      $_SESSION['senha'] = $result['senha'];
      $_SESSION['nivel'] = $result['nivel'];
      if($_SESSION['nivel']  <= "3"){
        header("location:main.php");
      }else{
        $_SESSION['errorlogin'] = "<div class='alert alert-danger'>Usuário sem nível de acesso<span class='glyphicon glyphicon-alert'></span></div>";
        header("location:index.php");
      }
    }
  }

 ?>
