<html>
	<head>
	<div align="center">
	<title>Dobro, Metade e Triplo </title>
	<font size="10" face="Time New Roman" color="#00008B"> Dobro, Metade e Triplo</font>
	</head>
	<body>
		
		<form name="tab1" method="GET">
		<b>Digite um número: </b><br><input type="number" name="number"/>	
			
	<br><br>
		<input type="submit" value="enviar"/>
	</form>

<?php

	@$num=$_GET["number"];
	
	echo '<br><b>'.$num.'</b><br>';
	if ($num < 10)
	{
		echo ' Seu dobro é<br>'.($num*2).'<br>';
	}
	if ($num >= 10)
	if ($num < 15)
	{
		echo ' A métade é<br>'.($num/2).'<br>';
	}
	if ($num >= 15)
	{
		echo 'Seu triplo é <br>'.($num*3).'<br>';
	}

?>

</div>
	</body>
</html>