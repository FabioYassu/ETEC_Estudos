<html>

	<head>

	</head>

		<body>
	<form name="Tab" method="get">
 <b>Informe um valor do produto : </b><br><input type="text" value=" " name="valor1" >
 <br><br>
	<form name="Tab2" method="get">
 <b>Informe % de desconto    :</b> <br><input type="text" value=" " name="valor2">
 <br><br>
 
 <input type="submit" value = "Iniciar" > 
	</form>
	
<?php

		$kmI = $_GET["valor1"];
		$kmF = $_GET["valor2"];
		$litros = 30;
		$kmPer = $kmI-$kmF;
		$consumo =  $kmPer/$litros;
		
		echo 'a distancia percorrida foi'.$kmPer.'KM/L usando 30lt seu consumo médio é de '.$consumo.' .';
		
?>

		</body>
</html>