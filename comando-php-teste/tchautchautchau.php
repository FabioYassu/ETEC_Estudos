<?php

	$mercadoria = 200;
	$desconto = 22;
	$precofinal = $mercadoria/$desconto;
	
		if($precofinal > 0.30)
		{
			echo 'Desconto n�o aprovado';
		}
		
		else
		{
			echo 'Desconto aprovado';
		}
		
?>
