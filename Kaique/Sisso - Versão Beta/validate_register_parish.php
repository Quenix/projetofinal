<?php

session_start();
include('connection.php');

$responsavel = $_POST['responsavel'];
$paroquia = $_POST['nomeparoquia'];
$padre = $_POST['nomepadre'];
$bispo = $_POST['bisporesponsavel'];
$comunidade = $_POST['nomecomunidade'];
$endereco = $_POST ['endereco'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$site = $_POST['site'];
$logoparoquia = $_FILES['logoparoquia'];
$carimboparoquia = $_FILES['carimboparoquia'];
$cadastrar = $_POST['cadastrarparoquia'];



if(isset($cadastrar) && (!empty($responsavel))){

  $select_responsavel = "SELECT id_user, nome_user FROM usuarios WHERE nome_user = '$responsavel'";
  $check_resp = mysqli_query($connect, $select_responsavel);
  $checking_resp = mysqli_fetch_assoc($check_resp);
  $id_responsavel = $checking_resp['id_user'];
  if($checking_resp < 1){
    $_SESSION['fillerror'] = "<div class='alert alert-danger'>Responsável inválido <span class='glyphicon glyphicon-alert'></span></div>";
    header("location:register_parish.php");
  }else{
    //CHECK IF ALL THE FIELDS WERE FILLED
    if(!isset($cadastrar) || empty($responsavel) || empty($paroquia) || empty($padre) || empty($bispo) || empty($endereco) || empty($cep) || empty($cidade) || empty($estado) || empty($telefone)){
      $_SESSION['fillerror'] = "<div class='alert alert-danger'>Preencha Todos os campos obrigátorios <span class='glyphicon glyphicon-edit'></span></div>";
      header("location:register_parish.php");

      //FIELDS WERE FILLED
    }else{
      $select = "SELECT cep_paroquia FROM paroquia_registrada WHERE cep_paroquia = '$cep'";
      $check = mysqli_query($connect, $select) or die("ERROR AO CONECTAR NO BANCO DE DADOS");
      $checking = mysqli_num_rows($check);

      //CHECK IF PARISH IS REGISTERED
      if($checking >= 1){
        $_SESSION['fillerror'] = "<div class='alert alert-warning'>Já existe Paróquia registrada nesse CEP.<span class='glyphicon glyphicon-alert'></span></div>";
        header("location:register_parish.php");
      }else{
        if($logoparoquia['size'] > 10000 && $carimboparoquia['size'] > 10000 ){

          $diretorio = '/opt/lampp/htdocs/SGD-BETA/upload/';

          if($logoparoquia){

            $extensao_logo = strtolower(substr($logoparoquia['name'], -4));
            $nome_paroquia = 'logotipo'.$extensao_logo;

            if($extensao_logo != ".jpg" && $extensao_logo != ".png" && $extensao_logo != ".bmp"){
              $_SESSION['fillerror'] = "<div class='alert alert-danger'>Extensão do logo paroquial não é suportada pelo Sistema <span class='glyphicon glyphicon-picture'></span></div>";
              header("location:register_parish.php");
            }
            if($logoparoquia['size'] > 500000){
              $_SESSION['fillerror'] = "<div class='alert alert-danger'>O logo paroquial excede o valor de 5mb <span class='glyphicon glyphicon-ban-circle'></span></div>";
              header("location:register_parish.php");
            }
          }
          if($carimboparoquia){

            $extensao_carimbo = strtolower(substr($carimboparoquia['name'], -4));
            $nome_carimbo = 'carimbo'.$extensao_carimbo;

            if($extensao_carimbo != ".jpg" && $extensao_carimbo != ".png" && $extensao_carimbo != ".bmp"){
              $_SESSION['fillerror'] = "<div class='alert alert-danger'>Extensão do carimbo não é suportada pelo Sistema <span class='glyphicon glyphicon-picture'></span></div>";
              header("location:register_parish.php");
            }
            if($carimboparoquia['size'] > 500000){
              $_SESSION['fillerror'] = "<div class='alert alert-danger'>O carimbo da paróquia excede o valor de 5mb <span class='glyphicon glyphicon-ban-circle'></span></div>";
              header("location:register_parish.php");
            }
          }if( (move_uploaded_file($logoparoquia['tmp_name'], $diretorio.$nome_paroquia)) && (move_uploaded_file($carimboparoquia['tmp_name'], $diretorio.$nome_carimbo)) ){

            $insert_query = "INSERT INTO paroquia_registrada(nome_paroquia, padre_paroquia, bispo_responsavel, comunidade_paroquia, endereco_paroquia, cep_paroquia, cidade_paroquia, estado_paroquia, telefone_paroquia, email_paroquia, site_paroquia, logo_paroquia, carimbo_paroquia, fk_responsavel) VALUES ('$paroquia', '$padre', '$bispo', '$comunidade', '$endereco', '$cep', '$cidade', '$estado', '$telefone', '$email', '$site', '$nome_paroquia', '$nome_carimbo', '$id_responsavel')" or die(mysqli_error());
            $check_insert = mysqli_query($connect, $insert_query) or die("ERROR AO CONECTAR NO BANCO DE DADOS");
            if($check_insert){ //REGISTERED WITH SUCCESSFUL
              $_SESSION['insertioncorrect'] = "<div class='alert alert-success'> Paróquia registrada com sucesso <span class='glyphicon glyphicon-ok'></span></div> ";
              header("location:register_parish.php");
            }else{ //SOMETHING WENT(foi, deu) WRONG;
              $_SESSION['insertionincorrect'] = "<div class='alert alert-danger'>ERROR: Paróquia não foi cadastrada, contate o desenvolvedor: <a href='http://atomit.com.br/'><img src= img/icon.png style='width: 25px'>AtomIT</a><span class='glyphicon glyphicon-remove'></span></div>";
              header("location:register_parish");
            }
          }else{
            $_SESSION['insertionincorrect'] = "<div class='alert alert-danger'>ERROR: Paróquia não foi cadastrada, contate o desenvolvedor: <a href='http://atomit.com.br/'><img src= img/icon.png style='width: 25px'>AtomIT</a><span class='glyphicon glyphicon-remove'></span></div>";
          }


        }else{
          $_SESSION['fillerror'] = "<div class='alert alert-danger'>A Pároquia deve conter um carimbo e logo oficial <span class='glyphicon glyphicon-alert'></span></div>";
          header("location:register_parish.php");
        }
      }
    }
  }
}
 ?>
