<?php

session_start();
include('connection.php');


if(isset($_GET['usuario'])){

	$user = $_GET['usuario'];
	$select = "SELECT * FROM usuarios_iniciacao_crista where id_iniciacao = '$user'";

	$sql = mysqli_query($connect, $select);
	$check_user = mysqli_num_rows($sql);
	if($check_user > 0 ){

		$checking = mysqli_fetch_assoc($sql);

		$_SESSION['nome'] = $checking['nome'];
		$_SESSION['certidao'] = $checking['nmr_certidao'];
		$_SESSION['nascimento'] = $checking['data_nascimento'];
		$_SESSION['sexo'] = $checking['sexo'];
		$_SESSION['naturalidade'] = $checking['naturalidade'];
		$_SESSION['pai'] = $checking['nome_pai'];
		$_SESSION['mae'] = $checking['nome_mae'];
		$_SESSION['avo_materno'] = $checking['avo_materno'];
		$_SESSION['avo_materna'] = $checking['avo_materna'];
		$_SESSION['avo_paterno'] = $checking['avo_paterno'];
		$_SESSION['avo_paterna'] = $checking['avo_paterna'];
		$_SESSION['email'] = $checking['email'];
		$_SESSION['endereco'] = $checking['endereco'];
		$_SESSION['cep'] = $checking['cep'];
		$_SESSION['cidade'] = $checking['cidade'];
		$_SESSION['estado'] = $checking['estado'];
		$_SESSION['telefone'] = $cheking['telefone'];
		$_SESSION ['celebracao'] = $checking['data_celebracao'];
		$_SESSION['batizado'] = $checking['batizado_paroquia'];
		header('location:users_christian.php');
	}
}
if(isset($_GET['page'])){
	$page = $_GET['page'];
	$id_parish = $_SESSION['id']; //ID RESPONSÁVEL, PEGO AO LOGAR
	echo "PAGINA" .$page, "ID_PAROQUIA" .$id_parish;


	$select_user = "SELECT * FROM usuarios_iniciacao_crista where id_iniciacao = '$page'";
	$select_parish = "SELECT * FROM paroquia_registrada INNER JOIN usuarios ON paroquia_registrada.fk_responsavel = usuarios.id_user WHERE fk_responsavel = '$id_parish'";


	$check_user = mysqli_query($connect, $select_user);
	$check_parish = mysqli_query($connect, $select_parish);


	if(mysqli_num_rows($check_parish) > 0){
		$show = mysqli_fetch_assoc($check_parish);

		$_SESSION['nome_user'] = $show['nome_user']; //NAME OF THE USER
		$_SESSION['nome_paroquia'] = $show['nome_paroquia'];
		$_SESSION['padre_paroquia'] = $show['padre_paroquia'];
		$_SESSION['comunidade_paroquia'] = $show['comunidade_paroquia'];
		$_SESSION['endereco_paroquia'] = $show['endereco_paroquia'];
		$_SESSION['cep_paroquia'] = $show['cep_paroquia'];
		$_SESSION['cidade_paroquia'] = $show['cidade_paroquia'];
		$_SESSION['estado_paroquia'] = $show ['estado_paroquia'];
		$_SESSION['telefone_paroquia'] = $show['telefone_paroquia'];
		$_SESSION['email_paroquia'] = $show['email_paroquia'];
		$_SESSION['site_paroquia'] = $show['site_paroquia'];
		$_SESSION['logo_paroquia'] = $show['logo_paroquia'];
		$_SESSION['carimbo_paroquia'] = $show['carimbo_paroquia'];
		$parish = 1;
	}else{
		$_SESSION['usertblerror'] = "<div class='alert alert-danger'>Seu usuário não possui uma pároquia em seus registro! <span class='glyphicon glyphicon-remove'></span></div>";
		echo "asdasd";
	}
	if(mysqli_num_rows($check_user) > 0 ){

		$checking_user = mysqli_fetch_assoc($check_user);

		$_SESSION['nome'] = $checking_user['nome'];
		$_SESSION['batismo'] = $checking_user['sacramento_batismo'];
		$_SESSION['crisma'] = $checking_user['sacramento_crisma'];
		$_SESSION['eucaristia'] = $checking_user['sacramento_eucaristia'];
		$_SESSION['certidao'] = $checking_user['nmr_certidao'];
		$_SESSION['padrinho'] = $checking_user['padrinho'];
		$_SESSION['madrinha'] = $checking_user['madrinha'];
		$_SESSION['nascimento'] = $checking_user['data_nascimento'];
		$_SESSION['sexo'] = $checking_user['sexo'];
		$_SESSION['naturalidade'] = $checking_user['naturalidade'];
		$_SESSION['pai'] = $checking_user['nome_pai'];
		$_SESSION['mae'] = $checking_user['nome_mae'];
		$_SESSION['avo_materno'] = $checking_user['avo_materno'];
		$_SESSION['avo_materna'] = $checking_user['avo_materna'];
		$_SESSION['avo_paterno'] = $checking_user['avo_paterno'];
		$_SESSION['avo_paterna'] = $checking_user['avo_paterna'];
		$_SESSION['email'] = $checking_user['email'];
		$_SESSION['endereco'] = $checking_user['endereco'];
		$_SESSION['cep'] = $checking_user['cep'];
		$_SESSION['cidade'] = $checking_user['cidade'];
		$_SESSION['estado'] = $checking_user['estado'];
		$_SESSION['telefone'] = $checking_user['telefone'];
		$_SESSION['celebracao'] = $checking_user['data_celebracao'];
		$_SESSION['batizado'] = $checking_user['batizado_paroquia'];
		$user_page = 1;
	}
	if($parish = 1 && $user_page = 1){
		header('location:prints/christian_initiation_page.php');
	}else{
		echo "error";
	}
}


?>
