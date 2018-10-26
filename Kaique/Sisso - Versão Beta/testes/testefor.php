<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
		<form action="testefor.php" method="GET">
			<input name="teste">
		</form>
		<?php
			$teste = $_GET['teste'];

			for($i = 1; $i <=$teste; $i++ ){
				echo "teste";
			}
		?>
	</body>
</html>