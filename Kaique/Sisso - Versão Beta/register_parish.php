<?php
session_start();
require('validate_pages.php');
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta name="viewport" content="width=device-width, inicial-scale=1">
  	<meta charset="UTF-8">
  	<title>Cadastro da Paróquia</title>
  		<!--- CSS --->
  	<link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <?php require('validate_navbar.php'); ?>
    <section id='cadastroparoquia'>
      <div class="container-fluid">
        <div class="col-md-5 col-md-offset-4 col-sm-5 col-sm-offset-4 col-xs-12">
          <h1 class="text-center">Cadastrar Paróquia</h1>
          <form action="validate_register_parish.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <?php

                    //PARISH ERROR EXISTING AND FIELD ERROR REQUIRED
                if(isset($_SESSION['fillerror'])){
                  echo $_SESSION['fillerror'];
                  unset($_SESSION['fillerror']);
                }

                    //REGISTER PARISH SUCCESSFUL
                if(isset($_SESSION['insertioncorrect'])){
                  echo $_SESSION['insertioncorrect'];
                  unset ($_SESSION['insertioncorrect']);
                }
                    //REGISTER PARISH NOT SUCCESS
                if(isset($_SESSION['insertionincorrect'])){
                  echo $_SESSION['insertionincorrect'];
                  unset ($_SESSION['insertionincorrect']);
                }
               ?>
              <label>Responsável *;</label>
              <select class="form-control" name="responsavel">
              <?php
              include('connection.php');
              $select = "SELECT nome_user FROM usuarios";
              $query = mysqli_query($connect, $select);
              while($paroquia = mysqli_fetch_assoc($query)){
                  echo '<option>'. $paroquia['nome_user'] .'</option>';
              }
              ?>
              </select>
              <label>Nome da Paroquia *:</label>
              <input type="text" class="form-control" placeholder="Insira o nome da paróquia" name="nomeparoquia">
            </div>
            <div class="form-group">
              <label>Nome Padre *:</label>
              <input type="text" class="form-control" placeholder="Nome de Padre" name="nomepadre">
            </div>
            <div class="form-group">
              <label>Bispo Responsável *:</label>
              <input type="text" class="form-control" placeholder="Exemplo: Mor José Faustino Filho" name="bisporesponsavel">
            </div>
            <div class="form-group">
              <label>Nome Comunidade:</label>
              <input type="text" class="form-control" placeholder="Nome da Comunidade" name="nomecomunidade">
            </div>
            <div class="form-horizontal">
              <label>Endereço *:</label>
              <input type="text" class="form-control" placeholder="Logradouro, número e bairro" name="endereco">
              <input type="text" class="form-control cep" placeholder="CEP" name="cep">
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-8">
                    <input type="text" class="form-control" placeholder="Cidade" name="cidade">
                </div>
                <div class="col-md-3 col-sm-3 col-xs-4">
                  <input type="text" class="form-control text-uppercase" placeholder="Estado" name="estado" maxlength="2">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Telefone *:</label>
              <input type="text" class="form-control tel" placeholder="(DD) 0000-0000" name="telefone">
            </div>
            <div class="form-group">
              <label>E-mail da paróquia:</label>
              <input type="text" class="form-control" placeholder="nome@domínio.com.br" name="email">
            </div>
            <div class="form-group">
              <label>Site:</label>
              <input type="text" class="form-control" placeholder="URL" name="site" name="site">
            </div>
            <div class="form-group">
              <label>Logo da Paróquia *:</label>
              <input type="file" name="logoparoquia">
            </div>
            <div class="form-group">
              <label>Carimbo da Paróquia *:</label>
              <input type="file" name="carimboparoquia">
            </div>
            <input type="submit" class="btn btn-success acc" name="cadastrarparoquia" value="Cadastrar">
          </form>
        </div>
      </div>
    </section>
    <?php include('logo.php') ?>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/mask.js"></script>
  </body>
</html>
