<?php session_start() ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, inicial-scale=1">
		<meta charset="UTF-8">
		<title></title>
			<!-- CSS -->
		<link rel="stylesheet" href="css/custom.css">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>
		<section id="users_form">
			<div class="container-fluid">
				<h2>Dados do usuário:</h2>
				<hr>
				<div class=" text-center col-md-5 col-md-offset-4">
					<form>
						<div class="form-group">
							<label>Nome: </label><p><?php echo $_SESSION['nome']; ?></p>

						</div>
						<div class="form-group">
							<label>Certidão de Nascimento: </label><p><?php echo $_SESSION['certidao']; ?></p>
						</div>
						<div class="form-group">
						</div>
						<div class="form-group">
							<label>Data Nascimento: </label><p><?php echo date("d/m/Y", strtotime($_SESSION['nascimento']));?></p>
						</div>
						<div class="form-group">
							<label>Sexo: </label><p><?php echo $_SESSION['sexo']; ?></p>
						</div>
					</form>
				</div>
			</div>
		</section>
	<?php

	include('logo.php');
	include('rodape.php');

	?>
	</body>
</html>
