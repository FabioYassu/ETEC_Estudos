 <?php
		$Cabecalho = True;
		$Valor=1;
		Do

		   {
			   /*
			   bloco de comentários
			   
			  */ 
				if ($Cabecalho) // mesma coisa que se cabecalho for true)
					{
					 $Cabecalho=False;
					 echo'Codigo Filme<BR><BR>';
					}
				echo $Valor.' ';
				echo 'Sinopse do filme '. $Valor.'<BR>';
				$Valor++;
		   }
		While ($Valor<=10)

  ?>
 