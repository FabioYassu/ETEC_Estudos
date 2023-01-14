<!DOCTYPE html>

<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>EXERCICIO 2 - Fabio Yassu - 2TDSN - PWII </title>
			<style>
		.borda {
			margin: auto auto;
			padding:10px;
			width:200px;
			height:auto;
			
			border: 1px solid;
			
		}
		</style>
	</head>
<body>
<div class='borda'>
<?php

$num = 5;

if($num > 0 and $num < 11)
{
	for($i = 0; $i < 11; $i++)
	{
		echo '<b><center>' . "$num X $i =" . $i*$num . '</b></center><br>';
	}
}
?>
</div>
</body>
</html>

 

