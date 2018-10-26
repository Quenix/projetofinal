<?php
	session_start();
	require('validate_pages.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, inicial-scale=1">
		<meta charset="UTF-8">
		<title>3. Cadastro Testemunhas</title>
			<!-- CSS -->
		<link rel="stylesheet" href="css/custom.css">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
		<?php
		require('validate_navbar.php');
		?>
		<section id="casamento_testemunhas">
			<div class="container-fluid">
				<div class="row">
					<div class=" col-md-11 col-md-offset">
						<h1 class="text-center">Padrinhos</h1>
						<form action="validate_godfathers.php" method="POST">
							<div class="form-group">
								<div class="col-md-5 col-md-offset-1">
									<h4 class="text-uppercase">Padrinho:</h4>
									<?php

									if(isset($_SESSION['wiferegistersuccessful'])){
										echo $_SESSION['wiferegistersuccessful'];
										unset($_SESSION['wiferegistersuccessful']);
									}
									if(isset($_SESSION['endregistergodfathers'])){
										echo $_SESSION['endregistergodfathers'];
										unset($_SESSION['endregistergodfathers']);
									}
									if(isset($_SESSION['errorrg'])){
										echo $_SESSION['errorrg'];
										unset($_SESSION['errorrg']);
									}
									if(isset($_SESSION['fielderrorrequired_godfather'])){
										echo $_SESSION['fielderrorrequired_godfather'];
										unset($_SESSION['fielderrorrequired_godfather']);
									} ?>
									<div class="form-group">
										<label>Nome *:</label>
										<input type="text" class="form-control" placeholder="Nome Completo" name="nome_padrinho">
									</div>
									<div class="form-group">
										<label>Idade *:</label>
										<input type="number" class="form-control" placeholder="Idade" name="idade_padrinho" maxlength="2">
									</div>
									<div class="form-group">
										<label>RG *:</label>
										<input type="text" class="form-control" placeholder="Número do RGº" name="rg_padrinho">
									</div>
									<div class="form-group">
										<label>Profissão *:</label>
										<input type="text" class="form-control" placeholder="Profissão" name="profissao_padrinho">
									</div>
									<div class="form-group">
										<label>Endereço *:</label>
										<input type="text" class="form-control" placeholder="Endereço" name="endereco_padrinho">
									</div>
									<div class="form-group">
										<label>Data de Nascimento *:</label>
										<input type="date" class="form-control" placeholder="00/00/0000" name="data_padrinho">
									</div>
									<div class="form-group">
										<label>Estado Civil *:</label>
										<input type="text" class="form-control" placeholder="Estado Civil" name="civil_padrinho">
									</div>
									<div class="form-group">
										<label>Nacionalidade *:</label>
										<input type="text" class="form-control" placeholder="Nacionalidade" name="nacionalidade_padrinho">
									</div>
									<div class="form-group">
										<?php
										if(isset($_SESSION['noivo']) && isset($_SESSION['noiva'])){
											echo "<label>Casamento :</label><div class='alert alert-info'><span class='glyphicon glyphicon-heart'></span> ".$_SESSION['noivo'] ." E ". $_SESSION['noiva']."<span class='glyphicon glyphicon-heart'></span></div>";
										}
										?>
									</div>
								</div>

								<div class="col-md-5 col-md-offset-1">
									<h4 class="text-uppercase">Madrinha:</h4>
									<div class="form-group">
										<?php if(isset($_SESSION['fielderrorrequired_godmother'])){
											echo $_SESSION['fielderrorrequired_godmother'];
											unset($_SESSION['fielderrorrequired_godmother']);
										} ?>
										<label>Nome *:</label>
										<input type="text" class="form-control" placeholder="Nome Completo" name="nome_madrinha">
									</div>
									<div class="form-group">
										<label>Idade *:</label>
										<input type="number" class="form-control" placeholder="Idade" name="idade_madrinha" maxlength="2">
									</div>
									<div class="form-group">
										<label>RG *:</label>
										<input type="text" class="form-control" placeholder="Número do RGº" name="rg_madrinha">
									</div>
									<div class="form-group">
										<label>Profissão *:</label>
										<input type="text" class="form-control" placeholder="Profissão" name="profissao_madrinha">
									</div>
									<div class="form-group">
										<label>Endereço *:</label>
										<input type="text" class="form-control" placeholder="Endereço" name="endereco_madrinha">
									</div>
									<div class="form-group">
										<label>Data de Nascimento *:</label>
										<input type="date" class="form-control" placeholder="00/00/0000" name="data_madrinha">
									</div>
									<div class="form-group">
										<label>Estado Civil *:</label>
										<input type="text" class="form-control" placeholder="Estado Civil" name="civil_madrinha">
									</div>
									<div class="form-group">
										<label>Nacionalidade *:</label>
										<input type="text" class="form-control" placeholder="Nacionalidade" name="nacionalidade_madrinha">
									</div>
									<input type="submit" class="btn btn-success" name="cadastrar" value="CADASTRAR PADRINHOS">
								</div>
								</div>
							</form>
						</div>
					</div>
				</div>
		</section>
		<?php
		include('logo.php');
		include('rodape.php');
		 ?>
	</body>
</html>
