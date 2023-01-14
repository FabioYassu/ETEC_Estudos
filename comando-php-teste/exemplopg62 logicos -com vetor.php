 <?php
	$Cor = "Vermelho";
	$CordaBandeira[0] = "Verde";
	$CordaBandeira[1] = "Amarelo";
	$CordaBandeira[2]  = "Azul";
	$CordaBandeira[3]  = "Branco";
	
	if ($CordaBandeira[0]  == "Verde" or
	    $CordaBandeira[1]  == "Amarelo" or
	    $CordaBandeira[2]  == "Azul" or
        $CordaBandeira[3]  == "Branco")
           {
             echo $CordaBandeira;
 	         echo ' É uma das cores de nossa bandeira!';
             
	   }
	 else
           {
             echo $CordaBandeira;
             echo ' Não é uma cor de nossa bandeira!';
           }
  ?>
 