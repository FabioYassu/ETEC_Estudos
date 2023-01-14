<?php

	$cabecalho = True;
	$valor= 1 ;
	do 
		{
		if ($cabecalho)
			{
				$cabecalho = False;
				echo 'codigo filme<br><br>';
			}
			echo $valor.' ';
			echo '<b>Sinopse do filme</b> ' .$valor.'<br>';
			$valor++;
		}
	While ($valor<=10)
?>