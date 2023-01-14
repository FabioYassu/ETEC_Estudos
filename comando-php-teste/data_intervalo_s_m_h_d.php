<html>
        <head>
               <title></title>
               <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        </head>
<body>
<?php

	setlocale(LC_ALL,'pt_BR', 'pt_BR.utf-8','pt_BR.utf-8', 'portuguese');
	
	$dataAT = strftime(' '.'%a, %d de %B de %Y às %Hh%M'.''); //Padrão BR diaSemana, diaNum, MêsExtenso, Ano, Hora
		$dA = strtotime ('2020-09-15 23:00:00');	//DATA em Sugundos
		$dN = strtotime ('2020-09-01 06:00:00');	// DATA em Segundos
		$dataAtual = date('d-m-Y H:i:s', $dA);		//DATA por Extenso
		$dataNasc = date('d-m-Y H:i:s', $dN);		//DATA por Extenso
		
		$difSeg = $dA-$dN;		//Segundos(Diferença datas em Segundos)
		$difMin= $difSeg /60;		//minutos (DifSegundos / 60 segundos)
		$difHora= ($difSeg /(60*60));		//horas	  (DifSegundos / (60 segundos x 60 minutos)
		$difDia= ($difSeg /(60*60*24));		//Dias	  (DifSegundos / (60 segundos x 60 minutos x 24 horas)
		$difSemana= $difSeg /(60*60*24*7);	//Semanas (DifSegundos / (60 segundos x 60 minutos x 24 horas x 7 semanas)
		echo '<font face="Arial" >';
		
		echo $dataAT.'<br>';
		echo '<br>Data Nascimento: <b>'.$dataNasc.'</b><br>';
		echo 'Data Atual: <b>'.$dataAtual.'</b><br>';
		echo '<br>A diferença entre a datas são<br>';
		echo '<b>'.$difSeg.'</b> Segundos<br> <b>'.$difMin.'</b> Minutos';
		echo '<b><br>'.$difHora.'</b> Horas <br><b>'.round($difDia).'</b> Dias ';
		echo '<b><br>'.round($difSemana).'</b> Semanas';
					
		echo '</font>';
		
		
		
?>
</body>
</html>