 <?php
	$Cabecalho = true;
             //1� parte valor inicial de $valor � 1
			 //parte do meio -- faz enquanto $valor for menor oun igual a 5
			 // ultima parte incrementa a vari�vel $Valor de um em um
      	for($Valor=1;$Valor <=5;$Valor++)
         {
            if($Cabecalho)
               {
                 $Cabecalho=False;
                 echo 'C�digo Filme <br> <br>';
               }
             echo $Valor.' ';
             echo 'Sinopse do filme '.$Valor.'<br>';
         
             //$Valor++;
          }
                


  ?>
 