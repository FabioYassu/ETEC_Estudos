 <?php
	$vlMercadoria =1550;
    $vlDesconto  =138;
    $vlPagar = $vlMercadoria - $vlDesconto;

    echo '<table border= "1" width="400">';
    echo '<tr><td width="300"> Valor da mercadoria</td>';
    echo '<td>'.$vlMercadoria.'</td></tr>';
	
	echo '<tr><td width="300"> Valor do desconto</td>';
    echo '<td>'.$vlDesconto.'</td></tr>';

    echo '<tr><td width="300"> Total a pagar </td>';
    echo '<td>'.$vlPagar.'</td></tr>';
    echo '<tr><td width= "600"> <marquee> 
	Isso ai galerinha do 2º tin </marquee></td></tr>';        
    echo '</table>';   
     ?>
 