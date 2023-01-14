<!DOCTYPE html>

<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>EXERCICIOS - Fabio Yassu - 2TDSN - PWII </title>
		<style>
	body 
		{
            background-image: url(../back2.jpg);
			background-attachment: fixed ;
			background-size: 100% ;
			background-repeat: repeat ;
			margin: 50px;
		}
	.borda 
		{
			background-color: #FFFFFF ;
			margin: auto auto;
			padding:10px;
			width:200px;
			height:auto;
			border: 1px solid;
		}
		</style>
	</head>
<body>
	<?php
		echo "<center><b><br><a href=\"..\Menu.php\">Pagina Inicial</a></center></b><br>";
	?>
	
	<div class='borda'>
		<form name="tab1" method="GET">
			<b>Digite um número: </b><br><input type="number" name="number"/>	
			<br><br>
			<input type="submit" value="enviar" name="enviar"/>
		</form>

	<?php

		if(isset($_GET['enviar']))
		{
			@$num=$_GET["number"];
			
			echo '<br><b>'.$num.'</b><br>';
			echo ' Seu dobro é<br>'.($num*2).'<br>';
			echo ' A métade é<br>'.($num/2).'<br>';
			echo 'Seu triplo é <br>'.($num*3).'<br>';
			
		}
	?>
	</div>
</body>
</html>