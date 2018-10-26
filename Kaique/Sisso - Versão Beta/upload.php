<?php

include('connection.php');
$imagem = $_FILES['imagem'];
if(isset($imagem)){
  //substr = extensão do arquivo
  //strtolower = define a extensão toda em minúscula
  // o -4 pega ultimas 4 letras da extensão exemplo > .jpg

  echo $extensao = strtolower(substr($imagem['name'], -4));

  echo $test = $imagem['size']. ' Bytes';
/*
  $novo = md5(time()).$extensao;


  //Define nome do arquivo

  if($extensao == ".jpg" || $extensao == ".png" || $extensao == ".bmp"){

      $diretorio = 'C:\xampp\htdocs\SGD-BETA\upload/'; //Define o diretorio para onde enviaremos o arquivo
      move_uploaded_file($imagem['tmp_name'], $diretorio.$novo); //efetua o upload

      $insert = "INSERT INTO testedeimg (imagem) VALUES('$novo')";

      $query = mysqli_query($connect, $insert);

      if($query){
        echo 'celta';
      }else{
        echo 'error';
      }
  }else{
    echo 'error';
  }
}else{
  echo "kkkkkkkkkk";*/
}
?>
