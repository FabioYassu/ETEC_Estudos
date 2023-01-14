<!DOCTYPE html>

<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>EXERCICIOS - Fabio Yassu - 2TDSN - PWII </title>
		<style>
	body 
		{
            background-image: url(../back2.jpg);
			background-attachment: fixed ;
			background-size: 100% ;
			background-repeat: repeat ;
			bmargin: 50px;
		}
	.borda 
		{
			background-color: #FFFFFF ;
			margin: auto auto;
			padding:10px;
			width:200px;
			height:auto;
			border: 1px solid;
		}
		 </style>
	</head>
<body>
	<?php
		echo "<center><b><br><a href=\"..\Menu.php\">Pagina Inicial</a></center></b><br>";
	?>
	
		<div class='borda'>
		<form action="" method="get">
		Escolha um numero para valor A:  <input type="number" name="a" /><br />
		Escolha um numero para valor B:  <input type="number" name="b" /><br />
		Escolha um numero para valor C:  <input type="number" name="c" /><br />
		<input type="submit" name="enviar" value="Calcular" />
		</form> 
		
	<?php
		if(isset($_GET['enviar']))
		{
		$a = $_GET['a'];
		$b = $_GET['b'];
		$c = $_GET['c'];

		$delta = ($b*$b)-((4*$a)*$c);

		echo ('<br>▲ = '.$b.'²-4.'.$a.'.'.$c.'<br>');
		echo ('O valor de delta é: <b>'.$delta.'</b><br>');

		}
	?>

 
	</div>
</body>
</html>
