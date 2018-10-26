<?php

session_start();
require('connection.php');

if(isset($_GET['marriage_authorization'])){

  $page = $_GET['marriage_authorization'];
	$id_parish = $_SESSION['id']; //ID RESPONSÁVEL, PEGO AO LOGAR


  $select_marriage = "SELECT * FROM cadastro_noiva INNER JOIN cadastro_noivo ON cadastro_noiva.fk_noivo = cadastro_noivo.id_noivo WHERE id_noiva = '$page'";
	$select_parish = "SELECT * FROM paroquia_registrada INNER JOIN usuarios ON paroquia_registrada.fk_responsavel = usuarios.id_user WHERE fk_responsavel = '$id_parish'";


	$check_marriage = mysqli_query($connect, $select_marriage);
	$check_parish = mysqli_query($connect, $select_parish);

	if(mysqli_num_rows($check_parish) > 0){
		$show = mysqli_fetch_assoc($check_parish);

    $_SESSION['nome_user'] = $show['nome_user'];
		$_SESSION['nome_paroquia'] = $show['nome_paroquia'];
		$_SESSION['padre_paroquia'] = $show['padre_paroquia'];
    $_SESSION['bispo_paroquia'] = $show['bispo_responsavel'];
		$_SESSION['comunidade_paroquia'] = $show['comunidade_paroquia'];
		$_SESSION['endereco_paroquia'] = $show['endereco_paroquia'];
		$_SESSION['cep_paroquia'] = $show['cep_paroquia'];
		$_SESSION['cidade_paroquia'] = $show['cidade_paroquia'];
		$_SESSION['estado_paroquia'] = $show ['estado_paroquia'];
		$_SESSION['telefone_paroquia'] = $show['telefone_paroquia'];
		$_SESSION['email_paroquia'] = $show['email_paroquia'];
		$_SESSION['site_paroquia'] = $show['site_paroquia'];
		$_SESSION['logo_paroquia'] = $show['logo_paroquia'];
		$parish = 1;
	}
  if(mysqli_num_rows($check_marriage) > 0){
    $checking_marriage = mysqli_fetch_assoc($check_marriage);

    //HUSBAND

    $_SESSION['nome_noivo'] = $checking_marriage['nome_noivo'];
    $_SESSION['cidade_nascimento_noivo'] = $checking_marriage['cidade_nascimento_noivo'];
    $_SESSION['data_nascimento_noivo'] = $checking_marriage['data_nascimento_noivo'];
    $_SESSION['estado_civil_noivo'] = $checking_marriage['estado_civil_noivo'];
    $_SESSION['profissao_noivo'] = $checking_marriage['profissao_noivo'];
    $_SESSION['pai_noivo'] = $checking_marriage['pai_noivo'];
    $_SESSION['mae_noivo'] = $checking_marriage['mae_noivo'];
    $_SESSION['residencia_noivo'] = $checking_marriage['residencia_noivo'];
    $_SESSION['telefone_noivo'] = $checking_marriage['telefone_noivo'];
    $_SESSION['paroquia_batizado_noivo'] = $checking_marriage['paroquia_batizado_noivo'];
    $_SESSION['data_batismo_noivo'] = $checking_marriage['data_batismo_noivo'];
    $_SESSION['rg_noivo'] = $checking_marriage['rg_noivo'];
    $_SESSION['matrimonio_noivo'] = $checking_marriage['matrimonio_noivo'];
    $_SESSION['data_matrimonio_noivo'] = $checking_marriage['data_matrimonio_noivo'];
    $_SESSION['parentesco_noivo'] = $checking_marriage['parentesco_noivo'];
    $_SESSION['vasectomia'] = $checking_marriage['vasectomia'];

    //WIFE

    $_SESSION['nome_noiva'] = $checking_marriage['nome_noiva'];
    $_SESSION['cidade_nascimento_noiva'] = $checking_marriage['cidade_nascimento_noiva'];
    $_SESSION['data_nascimento_noiva'] = $checking_marriage['data_nascimento_noiva'];
    $_SESSION['estado_civil_noiva'] = $checking_marriage['estado_civil_noiva'];
    $_SESSION['profissao_noiva'] = $checking_marriage['profissao_noiva'];
    $_SESSION['pai_noiva'] = $checking_marriage['pai_noiva'];
    $_SESSION['mae_noiva'] = $checking_marriage['mae_noiva'];
    $_SESSION['residencia_noiva'] = $checking_marriage['residencia_noiva'];
    $_SESSION['telefone_noiva'] = $checking_marriage['telefone_noiva'];
    $_SESSION['paroquia_batizada_noiva'] = $checking_marriage['paroquia_batizada_noiva'];
    $_SESSION['data_batismo_noiva'] = $checking_marriage['data_batismo_noiva'];
    $_SESSION['rg_noiva'] = $checking_marriage['rg_noiva'];
    $_SESSION['matrimonio_noiva'] = $checking_marriage['matrimonio_noiva'];
    $_SESSION['data_matrimonio_noiva'] = $checking_marriage['data_matrimonio_noiva'];
    $_SESSION['parentesco_noiva'] = $checking_marriage['parentesco_noiva'];
    $_SESSION['ligadura'] = $checking_marriage['ligadura'];

    $id_marriage = 1;

    if($parish == 1 && $id_marriage ==1){
      header("location:prints/marriage_authorization_page.php");
    }

  }
}if(isset($_GET['marriage_paroco'])){
  $page = $_GET['marriage_paroco'];
	$id_parish = $_SESSION['id']; //ID RESPONSÁVEL, PEGO AO LOGAR

  $select_marriage = "SELECT * FROM cadastro_noiva INNER JOIN cadastro_noivo ON cadastro_noiva.fk_noivo = cadastro_noivo.id_noivo WHERE id_noiva = '$page'";
	$select_parish = "SELECT * FROM paroquia_registrada INNER JOIN usuarios ON paroquia_registrada.fk_responsavel = usuarios.id_user WHERE fk_responsavel = '$id_parish'";

  $check_marriage = mysqli_query($connect, $select_marriage);
  $check_parish = mysqli_query($connect, $select_parish);

  if(mysqli_num_rows($check_parish) > 0){
    $show = mysqli_fetch_assoc($check_parish);

    $_SESSION['nome_user'] = $show['nome_user'];
    $_SESSION['nome_paroquia'] = $show['nome_paroquia'];
    $_SESSION['padre_paroquia'] = $show['padre_paroquia'];
    $_SESSION['bispo_paroquia'] = $show['bispo_responsavel'];
    $_SESSION['comunidade_paroquia'] = $show['comunidade_paroquia'];
    $_SESSION['endereco_paroquia'] = $show['endereco_paroquia'];
    $_SESSION['cep_paroquia'] = $show['cep_paroquia'];
    $_SESSION['cidade_paroquia'] = $show['cidade_paroquia'];
    $_SESSION['estado_paroquia'] = $show ['estado_paroquia'];
    $_SESSION['telefone_paroquia'] = $show['telefone_paroquia'];
    $_SESSION['email_paroquia'] = $show['email_paroquia'];
    $_SESSION['site_paroquia'] = $show['site_paroquia'];
    $_SESSION['logo_paroquia'] = $show['logo_paroquia'];
    $parish = true;
  }
  if(mysqli_num_rows($check_parish) > 0){
    
  }

}


 ?>
