<?php
if(isset($_GET["Submit"]))
	{
	$a = $_GET["a"];
	$b = $_GET["b"];
	$c = $_GET["c"];
		
		$delta = ($b * $b) - ((4 * $a) * $c);
		echo " Valor do delta <br/> Δ = b² –4 . a . c	<br/> Δ= $b ²-4.$a.$c <br/> Δ = ".$delta;
		
}

?>

<html>

<link href="styleform.css" rel="stylesheet" />
		
		<head lang="pt-br">
		<meta charset="utf-8">
		<title>Calculando o delta</title>
		</head>
		<link href="styleform.css" rel="stylesheet" />
		</head>

		<body>
		<form action="" method="get"">
				<label>
				<input name="a" type="text" size="1" />
				</label>
				<sup>2</sup>x
		  <input name="b" type="text" size="1" />
				x
				
		  <input name="c" type="text" size="1" />
				= 0 <br />
				<br />
				<label>
				<input type="submit" name="Submit" value="Calcular" />
				</label>
			</form>
		 <br /><br />
		</body>
		</html>


<a href ="delta.php"> <br> Tente Novamente</a>
<a href ="menu.html"> <br> Voltar ao menu</a>
</html>