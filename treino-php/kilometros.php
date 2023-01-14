<html>

	<head>
		<title>Kilometros</title>
	</head>

		<body>
			<div align="center">
	<form name="Tab1" method="get">
 <b>Duração da viagem em Horas</b><br><input type="text" id="horas" name="valor1" value=" ">
 <br><br>
	<form name="Tab2" method="get">
 <b>Velocidade média em Km/h</b> <br><input type="text" id="kmh" value=" " name="valor2">
 <br><br>
  <form name="Tab5" method="get">
 <b>Litros abastecidos</b> <br><input type="text" id="litros" value=" " name="valor5">
 <br><br>
 <form name="Tab3" method="get">
 <b>KM inicial marcado velocimetro</b> <br><input type="text" id="kmi" value=" " name="valor3">
 <br><br>
 <form name="Tab4" method="get">
 <b>KM final marcado velocimetro</b> <br><input type="" id="kmf" value=" " name="valor4">
 <br><br>
 
 
 
 <input type="submit" value = "Calcular" > <input type="reset">
	</form>
	
<?php
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
		
		
		//$consumo =  $kmPer/$litros;
		
		echo '<hr></hr>';
		echo 'Tempo:<b> '.$tempo.' h'.'<br> </b>Velocidade:<b> '.$velo.' Km/h'.'<br></b>Km total percorrido:<b> '.$kmPer.' Km</b>';
		echo '<hr></hr>';
		echo 'Km Inicial: <b>'.$kmI.' Km</b><br>'.'Km Final:<b> '.$kmF.' Km</b><br>'.'Km Percorrido: <b>'.$kmPerc.' Km</b>';
		echo'<br>Média de Km por litros : <b>'.$CombuUsados." L's</b>";
		
		//echo 'KM Inicial: '.$kmI. '<br> KM final: ' .$kmF.'<br>';
		//echo 'KM percorrido: ' .$kmPer.'  <br>Litros: '.$litros.'<br><br>';
		//echo 'A distancia percorrida foi <b>'.$kmPer.' Km/l</b> usando 30lt seu consumo médio é de <b>'.$consumo.'</b> por Km .';
		
?>
			</div>
		</body>
</html>