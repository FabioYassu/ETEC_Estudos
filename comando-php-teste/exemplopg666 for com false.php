 <?php
	$Cabecalho = false;
             //1ª parte valor inicial de $valor é 1
			 //parte do meio -- faz enquanto $valor for menor oun igual a 5
			 // ultima parte incrementa a variável $Valor de um em um
      	for($Valor=1;$Valor <=5;$Valor++)
         {
            if($Cabecalho==false)
               {
                 $Cabecalho=true;
                 echo 'Código Filme <br> <br>';
               }
             echo $Valor.' ';
             echo 'Sinopse do filme '.$Valor.'<br>';
         
            
          }
                


  ?>
 