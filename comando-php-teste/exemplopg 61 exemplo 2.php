 <?php
	    $Mercadoria =1557;
        $Desconto  =625;
        $Porcentual= $Desconto/$Mercadoria;
        if ($Porcentual >= 0.60)
         {
          echo '<font face="algerian" 
		  color ="red" size ="5">
          <marquee>
		  O desconto deve ser at&eacute; 30%!
		  </marquee></font>';
         }                 
        else 
         {
         echo '<h1>OK, desconto permitido!</h1>';
 
         }
  ?>
 