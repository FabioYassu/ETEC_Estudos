<html>

<head>

</head>

<body>
	<form name="Tab" method="get">
 <b>Informe um valor do produto : </b><br><input type="number" value=" " name="valor" >
 <br><br>
	<!--<form name="Tab2" method="get">
 <b>Informe % de desconto    :</b> <br><input type="number" value=" " name="percent">
 <br><br>-->
 
 <input type="submit" value = "Iniciar" > 
 
	</form>


<?php
	$vlMerc = $_GET["valor"];
	//$porcent = $_GET["percent"];
	
	$vlDesc = $porcent / 100;
	$vlPagar = $vlMerc - ($vlDesc * $vlMerc);
	
	echo '<table border ="5" width="400">';
	echo '<tr><th width="300"> Valor da mercadoria</th>';
	echo '<td>'.$vlMerc.'</td></tr>';
	
	echo '<tr><th width="300"> Valor de desconto';
	echo '<td>'.$porcent.'%</td></tr>';
	
	echo '<tr><th width="300"> Total a pagar</th>';
	echo '<td>'.$vlPagar.'</td></tr>';
	echo '</table>'

?>

</body>
</html>