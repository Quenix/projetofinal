<?php

session_start();

include('connection.php');

$nome = $_POST['nome_noivo'];
$cidade_nascimento = $_POST['cidadenascimento_noivo'];
$data_nascimento = $_POST['nascimento_noivo'];
$estado_civil = $_POST['estadocivil_noivo'];
$profissao = $_POST['profissao_noivo'];
$nomepai = $_POST['pai_noivo'];
$nomemae = $_POST['mae_noivo'];
$cidade = $_POST['cidade_noivo'];
$telefone = $_POST['telefone_noivo'];
$batizado_paroquia = $_POST['paroquia_noivo'];
$data_batizado = $_POST['databatizado_noivo'];
$numero_rg = $_POST['nmrrg_noivo'];
$matrimonio = $_POST['matrimonio'];
$data_matrimonio = $_POST['datamatrimonio'];
$parentesco = $_POST['parentesco'];
$vasectomia = $_POST['vasectomia'];
$cadastrar = $_POST['husband'];


if( !isset($cadastrar) || empty($nome) || empty($cidade_nascimento) || empty($data_nascimento) || empty($estado_civil) || empty($profissao) || empty($cidade) || empty($telefone) ||
 empty($batizado_paroquia) || empty($data_batizado) || empty($numero_rg) || empty($matrimonio) || empty($parentesco) || empty($vasectomia) ){

	$_SESSION['fielderrorrequired'] = "<div class='alert alert-danger'>Preencha Todos os campos obrigátorios <span class='glyphicon glyphicon-edit'></span></div>";
	 header("location:register_husband.php");
}
else{
	$check_noivo = "SELECT rg_noivo FROM cadastro_noivo WHERE rg_noivo = '$numero_rg'";
	$check = mysqli_query($connect, $check_noivo);
	$checking = mysqli_num_rows($check);
	if($checking >= 1){
		$_SESSION['fielderrorrequired'] = "<div class='alert alert-danger'>Já existe um usuário com esse rg <span class='glyphicon glyphicon-edit'></span></div>";
	 	header("location:register_husband.php");
	}else{
		$insert = "INSERT INTO cadastro_noivo (nome_noivo, cidade_nascimento_noivo, data_nascimento_noivo, estado_civil_noivo, profissao_noivo, pai_noivo, mae_noivo, residencia_noivo, telefone_noivo, paroquia_batizado_noivo, data_batismo_noivo, rg_noivo, matrimonio_noivo, data_matrimonio_noivo, parentesco_noivo, vasectomia) VALUES ('$nome', '$cidade_nascimento', '$data_nascimento', '$estado_civil', '$profissao', '$nomepai', '$nomemae', '$cidade', '$telefone', '$batizado_paroquia', '$data_batizado', '$numero_rg', '$matrimonio', '$data_matrimonio', '$parentesco', '$vasectomia')";
		$inserting = mysqli_query($connect, $insert);
		if($inserting){
      $_SESSION['noivo'] = $nome;
			$_SESSION['success'] = "<div class='alert alert-success'>Noivo cadastrado com sucesso, cadastre a noiva. <span class='glyphicon glyphicon-thumbs-up'></div>";
			header("location: register_wife.php");
		}else{
      $_SESSION['unsuccessful'] = "<div class='alert alert-danger'>Houve um erro ao inserir os dados do noivo, contate o desenvolvedor: <a href='http://atomit.com.br/'><img src= img/icon.png style='width: 25px'>AtomIT</a><span class='glyphicon glyphicon-remove'></span></div>";
      header("location:register_husband.php");
		}
	}
}
?>
