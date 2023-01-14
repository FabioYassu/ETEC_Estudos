<html>
	<head>
	<div align="center">
	<title>Idade Futura </title>
	<font size="10" face="Time New Roman" color="#00008B"> Dobro, Metade e Triplo</font>
	</head>
	<body>
		
		<form name="tab1" method="GET">
		<b>Digite seu Nome: </b><br><input type="text" name="nome"/>	<br>
		<b>Digite seu Sobrenome: </b><br><input type="text" name="sobre"/>	<br>
		<b>Digite sua Idade: </b><br><input type="number" name="idade"/>	<br>
			
	<br><br>
		<input type="submit" value="enviar"/>
	</form>

<?php
	@$nome=$_GET['nome'];
	@$sobrenome=$_GET['sobre'];
	@$idade=$_GET['idade'];$idfut=$idade+20;
		
		echo '<b>Nome: </b>'.$nome.'<br>';
		echo '<b>Sobrenome: </b>'.$sobrenome.'<br>';
		echo '<b>Idade: </b>'.$idade.'<br>';
		echo '<b>Daqui 20 anos você terá <u>'.$idfut. '</u> anos.';

?>