<?php

  session_start();
  include('validate_pages.php');
?>
<!DOCTYPE html>
<html>
  <head>
      <meta name="viewport" content="width=device-width, inicial-scale=1">
      <meta charet="utf-8">
      <title>Iniciação Cristã</title>

          <!-- CSS -->
      <link rel="stylesheet" href="css/custom.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <?php
    include('validate_navbar.php');
    ?>
    <section id="iniciacao">
      <div class="container-fluid">
        <div class="row">
          <div class=" col-md-5 col-md-offset-4 col-sm-5 col-sm-offset-4 col-xs-12">
            <form action="validate_initiation_christian.php" method="POST">
              <div class="form-group">
                <?php

                    /* FIELD ERROR REQUIRED*/
                  if(isset($_SESSION['fielderrorrequired'])){
                    echo $_SESSION['fielderrorrequired'];
                    unset($_SESSION['fielderrorrequired']);
                  }

                    /* END REGISTERED OF THE PARISH */
                  if(isset($_SESSION['endregisteredparish'])){
                    echo $_SESSION['endregisteredparish'];
                    unset($_SESSION['endregisteredparish']);
                  }
                 ?>
                <label>Nome *:</label>
                <input type="text" class="form-control" placeholder="Nome Completo" name="nome">
              </div>
              <div class="form-group">
                <label>Sacramentos *:</label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="optionbatismo"  value="batismo">Batismo
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="optioncrisma" value="crisma">Crisma
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" name="optioneucaristia" value="eucaristia">Eucaristia
                </label>
              </div>
              <div class="form-group">
                <label>Número da Certidão Nascimento *:</label>
                <?php
                  if(isset($_SESSION['errorcertidao'])){
                    echo $_SESSION['errorcertidao'];
                    unset($_SESSION['errorcertidao']);
                  }
                ?>
                <input type="text" class="form-control" placeholder="Número Certidão de Nascimento" name="nmrcertidao">
              </div>
              <div class="form-horizontal">
                <div class="form-group">
                  <div class="col-md-6">
                    <label>Padrinho</label>
                    <input type="text" class="form-control" placeholder="Nome Completo" name="padrinho">
                  </div>
                  <div class="col-md-6">
                    <label>Madrinha</label>
                    <input type="text" class="form-control" placeholder="Nome Completo" name="madrinha">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Data de Nascimento *:</label>
                <input type="date" class="form-control" name="nascimento" >
              </div>
              <div class="form-group">
                <label>Sexo *:</label>
                <?php
                  if(isset($_SESSION['errorsexo'])){
                    echo $_SESSION['errorsexo'];
                    unset($_SESSION['errorsexo']);
                  }
                 ?>
                <label class="radio-inline">
                  <input type="radio" name="OptionSexo" value="feminino">Feminino
                </label>
                <label class="radio-inline">
                  <input type="radio" name="OptionSexo" value="masculino">Masculino
                </label>
              </div>
              <div class="form-group">
                <label>Cidade nascimento *:</label>
                <input type="text" class="form-control" placeholder="Nautralidade" name="cidadenascimento">
              </div>
              <div class="form-horizontal">
                <div class="form-group">
                  <div class="col-md-6">
                    <label>Nome Pai</label>
                    <input type="text" class="form-control" placeholder="Nome Pai" name="nomepai">
                  </div>
                  <div class="col-md-6">
                    <label>Nome Mãe</label>
                    <input type="text" class="form-control" placeholder="Nome Mãe" name="nomemae">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <label>Avô Materno</label>
                    <input type="text" class="form-control" placeholder="Nome Avô Materno" name="avomaterno">
                  </div>
                  <div class="col-md-6">
                    <label>Avó Materna</label>
                    <input type="text" class="form-control" placeholder="Nome Avó Materna" name="avomaterna">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <label>Avô Paterno</label>
                    <input type="text" class="form-control" placeholder="Nome Avô Paterno" name="avopaterno">
                  </div>
                  <div class="col-md-6">
                    <label>Avó Paterna</label>
                    <input type="text" class="form-control" placeholder="Nome Avó Paterna" name="avopaterna">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" placeholder="nome@dominio.com" name="email">
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
                <label>Data da Celebração *:</label>
                <input type="date" class="form-control" placeholder="00/00/0000" name="datacelebracao">
              </div>
              <div class="form-group">
                <label>Batizado na Paróquia *:</label>
                <select class="form-control" name="batizadoparoquia">
                  <?php
                  include('connection.php');
                  $select = "SELECT * FROM paroquia_registrada";
                  $query = mysqli_query($connect, $select);
                  while($paroquia = mysqli_fetch_array($query)){
                      echo '<option>'. $paroquia['nome_paroquia'] .'</option>';
                  }
                  ?>
                </select>
              </div>
              <input class="btn btn-success acc" type="submit" name="cadastrar" value="Cadastrar">
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
