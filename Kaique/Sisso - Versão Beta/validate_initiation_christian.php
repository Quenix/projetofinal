<?php
  session_start();
  include('connection.php');

  $nome = $_POST['nome'];
  $batismo = isset($_POST['optionbatismo']) ? $_POST['optionbatismo'] : 'NULL';
  $crisma = isset($_POST['optioncrisma']) ? $_POST['optioncrisma'] : 'NULL';
  $eucaristia = isset($_POST['optioneucaristia']) ? $_POST['optioneucaristia'] : 'NULL';
  $certidao = $_POST['nmrcertidao'];
  $padrinho = $_POST['padrinho'];
  $madrinha = $_POST['madrinha'];
  $nascimento = $_POST['nascimento'];
  $sexo = $_POST['OptionSexo'];
  $cid_nascimento = $_POST['cidadenascimento'];
  $nomepai = $_POST['nomepai'];
  $nomemae = $_POST['nomemae'];
  $avomaterno = $_POST['avomaterno'];
  $avomaterna = $_POST['avomaterna'];
  $avopaterno = $_POST['avopaterno'];
  $avopaterna = $_POST['avopaterna'];
  $email = $_POST['email'];
  $endereco = $_POST['endereco'];
  $cep = $_POST['cep'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $telefone = $_POST ['telefone'];
  $celebracao = $_POST['datacelebracao'];
  $batizado = $_POST['batizadoparoquia'];
  $button = $_POST['cadastrar'];

  if(!isset($button) || empty($nome) || empty($certidao) || empty($padrinho) || empty($madrinha) || empty($nascimento)|| empty($cid_nascimento) || empty($endereco) || empty($cep)
   || empty($cidade) || empty($estado) || empty($telefone) || empty($celebracao) || empty($batizado)){

    $_SESSION['fielderrorrequired'] = "<div class='alert alert-danger'>Preencha Todos os campos obrigátorios <span class='glyphicon glyphicon-edit'></span></div>";
    header("location:initiation_christian.php");
  }else{
    $verifica = "SELECT nmr_certidao FROM usuarios_iniciacao_crista where nmr_certidao = '$certidao'";
    $sql = mysqli_query($connect, $verifica);
    $check_certidao = mysqli_num_rows($sql);

    if($check_certidao >=  1){
      $_SESSION['errorcertidao'] = "<div class='alert alert-danger'>Certidão inválida<span class='glyphicon glyphicon-remove'></span></div>";
      header("location:initiation_christian.php");
    }else{
      if(empty($sexo)){
        $_SESSION['errorsexo'] = "<div class='alert alert-danger'>Selecione o sexo.<span class='glyphicon glyphicon-remove-circle'></span></div>";
        header("location:initiation_christian.php");
      }else{
        $query_insert = " INSERT INTO usuarios_iniciacao_crista (nome, sacramento_batismo, sacramento_crisma, sacramento_eucaristia, nmr_certidao, padrinho, madrinha, data_nascimento, sexo, naturalidade, nome_pai, nome_mae, avo_materno, avo_materna, avo_paterno, avo_paterna, email, endereco, cep, cidade, estado, telefone, data_celebracao, batizado_paroquia)";
        $query_insert .= " VALUES ('$nome', '$batismo', '$crisma', '$eucaristia', '$certidao', '$padrinho', '$madrinha', '$nascimento', '$sexo', '$cid_nascimento', '$nomepai', '$nomemae', '$avomaterno', '$avomaterna', '$avopaterno', '$avopaterna', '$email', '$endereco', '$cep', '$cidade', '$estado', '$telefone', '$celebracao', '$batizado')";
        $insert = mysqli_query($connect, $query_insert);
        if($insert){
          $_SESSION['endregisteredparish'] = "<div class='alert alert-success'>Usuário cadastrado com sucesso <span class='glyphicon glyphicon-ok'></span></div>";
          header("location:initiation_christian.php");
        }else{
          $_SESSION['endregisteredparish'] = "<div class='alert alert-danger'>ERROR: Paróquia não foi cadastrada, contate o desenvolvedor: <a href='http://atomit.com.br/'><img src= img/icon.png style='width: 25px'>AtomIT</a><span class='glyphicon glyphicon-remove'></span></div>";
          header("location:initiation_christian.php");
        }
      }
    }
  }

 ?>
