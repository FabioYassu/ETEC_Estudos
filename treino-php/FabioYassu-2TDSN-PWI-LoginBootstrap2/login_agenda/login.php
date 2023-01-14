<!DOCTYPE html="pt-br">
<?php session_start();?>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title> - Toca do Coelho - </title>
	</head>
	
	<body>
		
		<?php
			session_start();
			unset($_SESSION['usuario']);
			if(isset($_POST['txtSenha']))
			{
				$nome = $_POST['txtNome'];
				$senha = $_POST['txtSenha'];
				
				if($nome != "" && $senha == "beba-me")
				{
					$usuario = array('nome' => $nome,'registro' => date());
					$_SESSION['usuario'] = $usuario;
					
					header("Location: privado.php");
				}else
				{
					header("Location: frmLogin.php");
				}
			}
			else
			{
				header("Location: frmLogin.php");
			}
		?>
	</body>
</html>