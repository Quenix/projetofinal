<?php

session_start();

include('connection.php');

$nome = $_POST['nome_noiva'];
$cidade_nascimento = $_POST['cidadenascimento_noiva'];
$data_nascimento = $_POST['nascimento_noiva'];
$estado_civil = $_POST['estadocivil_noiva'];
$profissao = $_POST['profissao_noiva'];
$nomepai = $_POST['pai_noiva'];
$nomemae = $_POST['mae_noiva'];
$cidade = $_POST['cidade_noiva'];
$telefone = $_POST['telefone_noiva'];
$batizado_paroquia = $_POST['paroquia_noiva'];
$data_batizado = $_POST['databatizado_noiva'];
$numero_rg = $_POST['nmrrg_noiva'];
$data_casamento = $_POST['casamento_data'];
$matrimonio = $_POST['matrimonio'];
$data_matrimonio = $_POST['datamatrimonio'];
$parentesco = $_POST['parentesco'];
$ligatadura = $_POST['ligatadura'];
$noivo = $_POST['noivo'];
$cadastrar = $_POST['wife'];



if( !isset($cadastrar) || empty($nome) || empty($cidade_nascimento) || empty($data_nascimento) || empty($estado_civil) || empty($profissao) || empty($cidade) || empty($telefone) ||
 empty($batizado_paroquia) || empty($data_batizado) || empty($numero_rg) || empty($matrimonio) || empty($parentesco) || empty($ligatadura) ){

	$_SESSION['fielderrorrequired'] = "<div class='alert alert-danger'>Preencha Todos os campos obrigátorios <span class='glyphicon glyphicon-edit'></span></div>";
	 header("location:register_wife.php");
}else{
	$select_bride = "SELECT rg_noiva FROM cadastro_noiva WHERE rg_noiva = '$numero_rg'";
	$check_bride = mysqli_query($connect, $select_bride);
	$checking = mysqli_num_rows($check_bride);
	if($checking >= 1){
		$_SESSION['fielderrorrequired'] = "<div class='alert alert-danger'>Já existe uma noiva cadastrada com esse RG <span class='glyphicon glyphicon-edit'></span></div>";
	 	header("location:register_wife.php");
	}else{
		if(!empty($noivo)){
			$select_engaged = "SELECT id_noivo, nome_noivo FROM cadastro_noivo WHERE nome_noivo = '$noivo'";
			$check_engaded = mysqli_query($connect, $select_engaged);
			$checking_engaded = mysqli_num_rows($check_engaded);

			if($checking_engaded > 0){
				$noivo_assoc = mysqli_fetch_assoc($check_engaded);
				$noivo_id = $noivo_assoc['id_noivo'];
				$insert = "INSERT INTO cadastro_noiva (nome_noiva, cidade_nascimento_noiva, data_nascimento_noiva, estado_civil_noiva, profissao_noiva, pai_noiva, mae_noiva, residencia_noiva, telefone_noiva, paroquia_batizada_noiva, data_batismo_noiva, rg_noiva, matrimonio_noiva, data_matrimonio_noiva, parentesco_noiva, ligadura, fk_noivo)";
				$insert .= "VALUES ('$nome', '$cidade_nascimento', '$data_nascimento', '$estado_civil', '$profissao', '$nomepai', '$nomemae', '$cidade', '$telefone', '$batizado_paroquia', '$data_batizado', '$numero_rg', '$matrimonio', '$data_matrimonio', '$parentesco', '$ligatadura', '$noivo_id')" or die("ERROR BANCO");
				$inserting = mysqli_query($connect, $insert);
				if($inserting){
          $_SESSION['noiva'] = $nome;
					$_SESSION['wiferegistersuccessful'] = "<div class='alert alert-success'>Noiva cadastrada com sucesso, cadastre os padrinhos. <span class='glyphicon glyphicon-thumbs-up'></div>";
          header("location:register_godfathers.php");
				}else{
					$_SESSION['wiferegisterunsuccessful'] = "<div class='alert alert-danger'>Você tentou casar um noivo que já possui um casamento em seu registro <span class='glyphicon glyphicon-warning-sign'></div>";
          header("location:register_wife.php");
				}
			}else{
				$_SESSION['fielderrorrequired'] = "<div class='alert alert-danger'>Noivo incorreto <span class='glyphicon glyphicon-warning-sign'></span></div>";
				header("location:register_wife.php");
			}

		}

	}
}
?>
