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
			margin: 50px;
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
	<?php
		$fat=1;
		$n1=5;
			
			echo ($n1.'!=');
			if ($n1==0)
			{
				echo $fat;
			}
			if ($n1==1) 
				echo $n1;
			else
			{
			for ($i = 1; $i <= $n1; $i++) {
					
				if ($i==$n1)
				{
					echo $i."=";
				}
				else
				{
					echo $i."x";
				}
					$fat=$fat*$i;
				}
				{
				echo $fat;
				}
			}
	?>
	</div>
</body>
</html>

