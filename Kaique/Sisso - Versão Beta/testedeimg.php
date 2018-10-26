<!DOCTYPE html>
    <html>
    <head lang="pt-br">
        <meta charset="UTF-8">
        <title>Armazenando imagens no banco de dados Mysql</title>
    </head>
    <body>
    <h2>Selecione um novo arquivo de imagem</h2>

    <form action="upload.php" method="post" enctype="multipart/form-data">
    <div><input name="nome" type="text"></div>
        <div><input name="imagem" type="file"/></div>
        <div><input type="submit" value="Salvar"/></div>
    </form>
     <?php
     require_once("teste_number.php");
     $data = 1311;
     $valores = ExtendedDate($data);
     echo $valores
     ?>
    <?php
      include('connection.php');
      $caminho = 'upload/';
      $select = "SELECT imagem FROM testedeimg";
      $query = mysqli_query($connect, $select);
      while($array = mysqli_fetch_array($query)){
      $teste = $array['imagem'];
      $img = $caminho.$teste;
      echo "<img src='$img'>";
      echo "<img src= upload/.jpg>";
      }

    ?>

    </body>
    </html>
