 <?php
	$vlMercadoria =1550;
    $vlDesconto  =138;
    $vlPagar = $vlMercadoria - $vlDesconto;

    echo '<table border= "5" widtd="400">';
    echo '<tr><td widtd="300"> Valor da mercadoria</td>';
    echo '<td>'.$vlMercadoria.'</td></tr>';
	
	echo '<tr><td widtd="300"> Valor do desconto</td>';
    echo '<td>'.$vlDesconto.'</td></tr>';

    echo '<tr><td widtd="300"> Total a pagar </td>';
    echo '<td>'.$vlPagar.'</td></tr>';
    echo '</table>';   
     
  ?>
 