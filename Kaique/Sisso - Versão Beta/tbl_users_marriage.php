<?php
session_start();
require('connection.php');
require('validate_pages.php');
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta name="viewport" content="width=device-width, inicial-scale=1">
    <meta charset="UTF-8">
    <title>Casamentos Realizados</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <?php require('validate_navbar.php'); ?>
    <section id="table_marriage">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Ata Nº</th>
                  <th>Nome Noiva</th>
                  <th>Nome Noivo</th>
                  <th>Autorização Casamento</th>
                  <th>Casamento Pároco</th>
                  <th>Certidão Pároco</th>
                  <th>Ficha Casamento</th>
                  <th>Processo de Casmento</th>
                  <th>Validade Civil</th>
                </tr>
              </thead>
              <tbody>
                <?php

                $select_casamento = "SELECT id_noiva, nome_noiva, nome_noivo FROM cadastro_noiva INNER JOIN cadastro_noivo ON cadastro_noiva.fk_noivo = cadastro_noivo.id_noivo";
                $check = mysqli_query($connect, $select_casamento);

                while($array = mysqli_fetch_array($check)){
                 ?>
                 <tr>
                   <td><? echo $array['id_noiva']; ?></td>
                   <td><? echo $array['nome_noiva']; ?></td>
                   <td><? echo $array['nome_noivo']; ?></td>
                   <td><a href="validate_tbl_marriage.php?marriage_authorization=<?php echo $array['id_noiva']; ?>" target="_blank"><span class="glyphicon glyphicon-tint"></span></a></td>
                   <td><a href="validate_tbl_marriage.php?marriage_paroco=<?php echo $array['id_noiva']; ?>" target="_blank"><span class="glyphicon glyphicon-tint"></span></a></td>
                   <td><a href="validate_tbl_marriage.php?certificate_paroco=<?php echo $array['id_noiva']; ?>" target="_blank"><span class="glyphicon glyphicon-tint"></span></a></td>
                   <td><a href="validate_tbl_marriage.php?marriage_register=<?php echo $array['id_noiva']; ?>" target="_blank"><span class="glyphicon glyphicon-tint"></span></a></td>
                   <td><a href="validate_tbl_marriage.php?marriage_process=<?php echo $array['id_noiva']; ?>" target="_blank"><span class="glyphicon glyphicon-tint"></span></a></td>
                   <td><a href="validate_tbl_marriage.php?validate_civil=<?php echo $array['id_noiva']; ?>" target="_blank"><span class="glyphicon glyphicon-tint"></span></a></td>
                 </tr>
               <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <?php
    require('logo.php');
    require('rodape.php');
     ?>
  </body>
</html>
