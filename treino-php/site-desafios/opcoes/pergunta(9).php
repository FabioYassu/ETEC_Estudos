<!DOCTYPE html>

<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>EXERCICIOS - Fabio Yassu - 2TDSN - PWII </title>
	</head>
<body>
	<?php
			echo "<center><b><br><a href=\"..\Menu.php\">Pagina Inicial</a></center></b><br>";
	?>
			
				
		<form name="Tab1" method="get">
	 <b>Duração da viagem em Horas</b><br><input type="number" id="horas" name="valor1" value=" ">
	 <br><br>
		<form name="Tab2" method="get">
	 <b>Velocidade média em Km/h</b> <br><input type="number" id="kmh" value=" " name="valor2">
	 <br><br>
		<form name="Tab5" method="get">
	 <b>Litros abastecidos</b> <br><input type="number" id="litros" value=" " name="valor5">
	 <br><br>
		<form name="Tab3" method="get">
	 <b>KM inicial marcado velocimetro</b> <br><input type="number" id="kmi" value=" " name="valor3">
	 <br><br>
		<form name="Tab4" method="get">
	 <b>KM final marcado velocimetro</b> <br><input type="number" id="kmf" value=" " name="valor4">
	 <br><br>
	 	 	 
	 <input type="submit" value = "Calcular" name="calc" > <input type="reset">
		</form>
		
	<?php
	if(isset($_GET['calc']))
	{
		// Km em Horas  
		@$tempo = $_GET["valor1"];
		@$velo = $_GET["valor2"];
		@$kmPer = $tempo*$velo;
		//Km em Distancia
		@$kmI = $_GET["valor3"];
		@$kmF = $_GET["valor4"];
		$kmPerc = $kmF-$kmI;		
		//Combustivel
		@$Litros =  $_GET["valor5"];
		@$CombuUsados = $Litros/$kmPer;
			
		echo '<hr></hr>';
		echo 'Tempo:<b> '.$tempo.' h'.'<br> </b>Velocidade:<b> '.$velo.' Km/h'.'<br></b>Km total percorrido:<b> '.$kmPer.' Km</b>';
		echo '<hr></hr>';
		echo 'Km Inicial: <b>'.$kmI.' Km</b><br>'.'Km Final:<b> '.$kmF.' Km</b><br>'.'Km Percorrido: <b>'.$kmPerc.' Km</b>';
		echo'<br>Média de Km por litros : <b>'.$CombuUsados." L's</b>";
	}		
	?>
		
	</body>
</html>