<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title> - - </title>
	</head>
	<body>
		<?php
			session_start();
			unset($_SESSION['usuario']);
			header("Location: frmLogin.php");
		?>
	</body>
</html>