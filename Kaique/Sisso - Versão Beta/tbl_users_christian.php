<?php

session_start();
require('connection.php');
require('validate_pages.php');
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Consulta Sacramento</title>

    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>

      <?php
      require('validate_navbar.php');


      $sql = "SELECT id_iniciacao, nome, sacramento_batismo, sacramento_crisma, sacramento_eucaristia FROM usuarios_iniciacao_crista" or die("aki");
      $conn = mysqli_query($connect, $sql)or die("Error no banco");
    ?>
    <section id="table_users">
      <div class="col-md-8 col-md-offset-2">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Ata Nº</th>
              <th>Nome</th>
              <th>Batismo</th>
              <th>Crisma</th>
              <th>Eucaristia</th>
              <th>Dados</th>
              <th>Imprimir</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while($array = mysqli_fetch_array($conn)){
            ?>

              <tr>
                <td><?php echo $array['id_iniciacao']; ?></td>
                <td><?php echo $array['nome']; ?></td>
                <td><?php echo $array['sacramento_batismo']; ?></td>
                <td><?php echo $array['sacramento_crisma']; ?></td>
                <td><?php echo $array['sacramento_eucaristia']; ?></td>
                <td><a href="validate_tbl_users.php?usuario=<?php echo $array['id_iniciacao']; ?>" class="btn btn-info"> acessar <span class="glyphicon glyphicon-search"></span></a></td>
                <td><a href="validate_tbl_users.php?page=<?php echo $array['id_iniciacao']; ?>" target="_blank"><span class="glyphicon glyphicon-tint"></span></a></td>
              </tr>
              <?php } ?>

          </tbody>
        </table>
      </form>
      </div>
    </section>
    <?php include('rodape.php'); ?>
  </body>
</html>
