<?php
	session_start();
	require('validate_pages.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, inicial-scale=1">
		<meta charset="UTF-8">
		<title>Cadastro Noivo</title>
			<!-- CSS -->
		<link rel="stylesheet" href="css/custom.css">
  		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
		<?php require('validate_navbar.php'); ?>
		<section id='casamento_noivo'>
			<div class="container-fluid">
				<div class=" col-md-5 col-md-offset-4">
					<h1 class="text-center">Dados do Noivo</h1>
					<form action="validate_husband.php" method="POST">
						<div class="form-group">
						<?php
						if(isset($_SESSION['unsuccessful'])){
							echo $_SESSION['unsuccessful'];
							unset($_SESSION['unsuccessful']);
						}

						if(isset($_SESSION['fielderrorrequired'])){
							echo $_SESSION['fielderrorrequired'];
							unset ($_SESSION['fielderrorrequired']);
						}
						?>
							<label>Nome completo *:</label>
							<input type="text" class="form-control" placeholder="Nome completo" name="nome_noivo">
						</div>
						<div class="form-group">
							<label>Cidade de Nascimento *:</label>
							<input type="text" class="form-control" placeholder="Nome da Cidade"name ="cidadenascimento_noivo">
						</div>
						<div class="form-group">
							<label>Data de Nascimento *:</label>
							<input type="date" class="form-control" name="nascimento_noivo" placeholder="DD/MM/AA">
						</div>
						<div class="form-group">
							<label>Estado Civil *:</label>
							<input type="text" class="form-control" placeholder="Estado Civil" name="estadocivil_noivo">
						</div>
						<div class="form-group">
							<label>Profissão *:</label>
							<input type="text" class="form-control" placeholder="Profissão" name="profissao_noivo">
						</div>
						<div class="form-horizontal">
							<div class="form-group">
								<div class="col-md-6">
									<label>Pai :</label>
									<input type="text" class="form-control" placeholder="Nome completo Pai" name="pai_noivo">
								</div>
								<div class="col-md-6">
									<label>Mãe :</label>
									<input type="text" class="form-control" placeholder="Nome completo Mãe" name="mae_noivo">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Residente *:</label>
							<input type="text" class="form-control" placeholder="Cidade" name="cidade_noivo">
						</div>
						<div class="form-group">
							<label>Telefone *:</label>
							<input type="text" class="form-control tel" placeholder="(DDD) 0000-0000" name="telefone_noivo">
						</div>
						<div class="form-horizontal">
							<div class="form-group">
								<div class="col-md-7">
									<label>Batizado na Paróquia *:</label>
									<input type="text" class="form-control" placeholder="Nome da Paróquia" name="paroquia_noivo">
								</div>
								<div class="col-md-4">
									<label>Data Batizado</label>
									<input type="date" class="form-control" name="databatizado_noivo" placeholder="DD/MM/AA">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Nº RG *:</label>
							<input type="text" class="form-control" placeholder="Número do RG" name="nmrrg_noivo">
						</div>
						<div class="form-group">
							<label>Já contraiu matrimônio civil ou religioso *:</label>
							<label class="radio-inline">
								<input type="radio" class="yes" name="matrimonio" value="Sim"> Sim
							</label>
							<label class="radio-inline">
								<input type="radio" class="not" name="matrimonio" value="Não">Não
							</label>
							<div id="show">
								<div class="col-md-4">
									<label>Quando irá realizar ?</label>
								</div>
								<div class="col-md-6">
									<input type="date" class="form-control" name="datamatrimonio" placeholder="DD/MM/AA">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Existe Parentesco entre os noivos? *:</label>
							<label class="radio-inline">
  							<input type="radio" name="parentesco" value="Sim"> Sim
							</label>
							<label class="radio-inline">
								<input type="radio" name="parentesco" value="Não"> Não
							</label>
						</div>
						<div class="form-group">
							<label>O noivo fez vasectomia ? *:</label>
							<label class="radio-inline">
  							<input type="radio" name="vasectomia" value="Sim" > Sim
							</label>
							<label class="radio-inline">
								<input type="radio" name="vasectomia" value="Não"> Não
							</label>
						</div>
						<input type="submit" class="btn btn-success acc" name="husband" value="Cadastrar Noivo">
					</form>
				</div>
			</div>
		</section>
		<?php
		include('logo.php');
		include('rodape.php') ;
		?>
	</body>
</html>
