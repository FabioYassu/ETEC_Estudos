<html>
	<head>
               <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			   <title> Calculadora de Datas Simples </title>
<div align="center">			 
			<font size="10" face="Time New Roman" color="#00008B"> Calculadora de Datas</font>
	</head>
	<body>
<br><br>

	<form name="tab1" method="GET">
		Nome: <input type="text" name="nome"/>	
			
	<br><br>
		Data Nascimento: <input type="number" name="idade"/>	
			
	<br><br>
		 <input type="submit" value="enviar"/>
	</form>
	
<?php

	$nome=$_GET["nome"];
	$idade=$_GET["idade"];
	$seg=$idade*31536000;
	$min=$seg / 60;
	$horas=$seg /60/60;
	$dias=$seg /60/60/24;
	$meses=$seg /60/60/24/30;
	
			
	echo 'Olá '.$nome.' Seja Bem-Vindo<br>';
	echo '<br>Estes são os tempos médios que viveu até o momento:';

	echo '<br>Segundos<br>'.$seg;
	echo '<br>Minutos<br>'.$min;
	echo '<br>Horas<br>'.$horas;
	echo '<br>Dias<br>'.$dias;
	echo '<br>Meses<br>'.round($meses);

?>