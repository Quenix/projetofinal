<?php
  session_start();
  if( (isset($_SESSION['email'])) || (isset($_SESSION['senha'])) || ($_SESSION['nivel']) ){

    $sair = session_destroy();

    if($sair){
      session_start();
      $_SESSION['permissionerror'] = "<div class='alert alert-success'> Você deslogou do Sistema. Até logo! <span class='glyphicon glyphicon-leaf'></span></div>";
      header("location:index.php");
    }
  }else{
    $_SESSION['permissionerror'] = "<div class='alert alert-success'> Você deslogou do Sistema. Até logo! <span class='glyphicon glyphicon-leaf'></span></div>";
    header("location:index.php");
  }
?>
