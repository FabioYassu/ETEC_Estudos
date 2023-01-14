 <?html
	$Mercadoria =1557;
        $Desconto  =625;
        $Porcentual= $Desconto/$Mercadoria;
        if ($Porcentual > 0.60)
         {
          echo 'O desconto deve ser até 30%!';
         }                 
        else 
         {
         echo 'OK, desconto permitido!';
 
         }



  ?>
 