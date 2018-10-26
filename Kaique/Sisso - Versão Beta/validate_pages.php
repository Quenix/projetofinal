<?php

  if( (!isset ($_SESSION['email']) == true) || (!isset ($_SESSION['senha']) == true) || (!isset ($_SESSION['id']) == true) || (!isset($_SESSION['nivel']) > 3) )
  {
    $_SESSION['permissionerror'] = "<div class='alert alert-danger'>Você não tem permissão para acessar essa página! <span class='glyphicon glyphicon-thumbs-down'></span></div>";
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    unset($_SESSION['nivel']);
    header('location:index.php');
  }
  ?>
