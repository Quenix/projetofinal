<!DOCTYPE html>
<?php
session_start();
require('validate_pages.php');
 ?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, inicial-scale=1">
    <meta charset="UTF-8">
    <title>Cadastro</title>

      <!-- CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <?php
      require('validate_navbar.php');
    ?>
    <section id="cadastro">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <h1 class="text-center">Cadastro Usuário</h1>
            <?php
            if(isset($_SESSION['msgreg'])){
              echo $_SESSION['msgreg'];
              unset($_SESSION['msgreg']);
            }
            ?>
            <form action="validate_register.php" method="POST">
              <div class="form-group">
                <label>Nome *:</label>
                <input type="text" class="form-control" placeholder="Nome" name="nome">
              </div>
              <div class="form-group">
                <label>E-mail *:</label>
                <?php
                if(isset($_SESSION['emailinvalid'])){
                  echo $_SESSION['emailinvalid'];
                  unset($_SESSION['emailinvalid']);
                }
                ?>
                <input type="email" class="form-control" placeholder="E-mail" name="email">
              </div>
              <div class="form-group">
                <label>Senha *:</label>
                <input type="password" class="form-control" placeholder="******" name="senha">
              </div>
              <div class="form-group">
                <label>Confirmar Senha *:</label>
                <input type="password" class="form-control" placeholder="Confirmar Senha" name="confsenha">
              </div>
              <div class="form-group">
                <label>Nível *:</label>
                <select class="form-control" name="OptionLevel">
                  <option value="admin">Administrador</option>
                  <option value="helper">Ajudante</option>
                </select>
              </div>
              <input type="submit" class="btn btn-success acc" name="cadastro" value="Cadastrar">
            </form>
          </div>
        </div>
      </div>
    </section>
    <?php
    include('logo.php');
    include('rodape.php');
    ?>
  </body>
</html>
