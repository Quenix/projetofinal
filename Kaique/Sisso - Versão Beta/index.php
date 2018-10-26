<!DOCTYPE html>
<?php session_start(); ?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, inicial-scale=1">
    <meta charset="utf-8">
    <title>BEM VINDO!</title>

      <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">

  </head>
  <body>

    <div class="container">
      <div class="row">

        <div  class="col-md-4 col-md-offset-4 geraPDF">
          <img id="logo" src="img/logo.png">
          <?php
                /* MESSAGE: WRONG LOGIN AND */
            if(isset($_SESSION['errorlogin'])){
              echo $_SESSION['errorlogin'];
              unset($_SESSION['errorlogin']);
            }
              /* MESSAGE: USER OF THE REGISTRATION */
            if(isset($_SESSION['registerend'])){
              echo $_SESSION['registerend'];
              unset($_SESSION['registerend']);
            }
              /* MESSAGE: PERMISION LEVEL DENIED  */
            if(isset($_SESSION['permissionerror'])){
              echo $_SESSION['permissionerror'];
              unset($_SESSION['permissionerror']);
            }
          ?>
          <form id="logar" action="validate_login.php" method="POST">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="E-mail" name="email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Senha" name="senha">
            </div>
            <button class="btn btn-success acc" type="submit" name="access">ACESSAR</button>
          </form>
        </div>
      </div>
    </div>
    <footer id="flogin">
      <div class="container">
        <p class="text-center "><a href="http://atomit.com.br" target="_Blank"><img src="img/icon.png"> AtomIT Solutions</a></p>
      </div>
    </footer>
    <?php
    include('rodape.php');
    ?>
  </body>
</html>
