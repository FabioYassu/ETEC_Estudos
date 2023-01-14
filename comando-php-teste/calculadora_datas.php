<html>
	<head>
               <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			   <title> Calculadora de Datas </title>
<div align="center">			 
			<font size="10" face="Time New Roman" color="#00008B"> Calculadora de Datas</font>
	</head>
	<body>
<br><br>

	<form name="tab1" method="GET">
		<input type="date" name="atual"/>	<!-- DATA ATUAL -->
		<input type="time" name="hora"/>	<!-- HORA ATUAL -->	
	<br><br>
			<input type="date" name="nasc"/>	<!-- DATA NASCIMENTO -->
			<input type="time" name="horan"/>	<!-- HORA NASCIMENTO -->
	<br><br>
		<input type="submit" value="enviar"/>
	</form>
	

<?php

	setlocale(LC_ALL,'pt_BR', 'pt_BR.utf-8','pt_BR.utf-8', 'portuguese');
	
		
		$dA=strtotime($_GET["atual"]);	// DATA ATUAL em Sugundos
		$dAA=strtotime($_GET["hora"]);	// HORA ATUAL em Segundos
		$dNN=strtotime($_GET["horan"]);	// HORA NASCIMENTO em Segundos
		$dN=strtotime($_GET["nasc"]);	// DATA NASCIMENTO em Segundos
		$dataAtual = date('d-m-Y', $dA); //DATA ATUAL por Extenso
		$horaAtual = date('H:i:s', $dAA);//HORA ATUAL por Extenso		
		$dataNasc = date ('d-m-Y', $dN); //DATA NASCIMENTO por Extenso
		$horaNasc = date ('H:i:s', $dNN);//HORA NASCIMENTO por Extenso		
		//V Calculos V
		$difSeg = $dA-$dN;					//Segundos(Diferença datas em Segundos)
		$difMin= $difSeg /60;				//minutos (DifSegundos / 60 segundos)
		$difHora= ($difSeg /(60*60));		//horas	  (DifSegundos / (60 segundos x 60 minutos)
		$difDia= ($difSeg /(60*60*24));		//Dias	  (DifSegundos / (60 segundos x 60 minutos x 24 horas)
		$difSemana= $difSeg /(60*60*24*7);	//Semanas (DifSegundos / (60 segundos x 60 minutos x 24 horas x 7 semanas)
		$difMeses= $difSeg /(60*60*24*30);	//Semanas (DifSegundos / (60 segundos x 60 minutos x 24 horas x 7 semanas)
		
		echo '<font face="Time New Roman" >';
			
		echo 'Data e Hora Atual: <b>'.$dataAtual.' '.$horaAtual.'</b><br>';
		echo '<br>Data e Hora de Nascimento: <b>'.$dataNasc.' '.$horaNasc.'</b><br>';
		echo '<br>A diferença entre a datas são<br>';
		echo '<br><b>'.$difSeg.'</b> Segundos<br>';
		echo '<b>'.$difMin.'</b> Minutos<br>';
		echo '<b>'.$difHora.'</b> Horas<br>';
		echo '<b>'.round($difDia).'</b> Dias<br>';
		echo '<b>'.round($difSemana).'</b> Semanas<br>';
		echo '<b>'.round($difMeses).'</b> Meses<br>';
		echo '</font>';
		
		
		
?>
</div>
	</body>
</html>