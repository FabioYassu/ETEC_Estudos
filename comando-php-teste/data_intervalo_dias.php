<?php

		$d1 = strtotime('2020-09-15 23:00:00');
		$d2 = strtotime('1991-24-12 23:00:00');
		
		$diff = $d1-$d2;		//Segundos(Diferença datas em Segundos)
		$diff2= $diff /60;		//minutos (DiferençaSegundos / 60 segundos)
		$diff3= $diff2 /60;		//horas	  (DiferençaSegundos / 60 segundos / 60 minutos)
		$diff4= $diff3 /24;		//Dias	  (DiferençaSegundos / 60 segundos / 60 minutos / 24 Horas)
		
		echo $diff;
		echo '<br>'.$diff2;
		echo '<br>'.$diff3. '<br>' ;
		echo round($diff4);
			
?>