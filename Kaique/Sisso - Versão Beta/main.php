<?php
  session_start();

  $level_dev = 1;
  $level_adm = 2;
  require('validate_pages.php');
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Bem Vindo!</title>
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <?php

    require('validate_navbar.php');
    ?>
    <?php require("rodape.php"); ?>
  </body>
</html>
