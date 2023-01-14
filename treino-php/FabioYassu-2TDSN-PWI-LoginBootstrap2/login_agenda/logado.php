<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title> - - </title>
	</head>
	<body>
	
	<?php
		  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
		if(isset($_SESSION['usuario']) == false)
		{
			header("Location: frmLogin.php");
		}
	?>
	</body>
</html>
	