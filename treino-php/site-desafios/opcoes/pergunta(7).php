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
	table
		{
			border: 5px solid ;
			border-style: outset;
			border-collapse: separate;
			width:120px;
		}
	tr
		{
			text-align: center;
		}
	td
		{
			padding:3px;
		}
		 </style>
		 
	</head>
<body>
<?php
		echo "<center><b><br><a href=\"..\Menu.php\">Pagina Inicial</a></center></b><br>";
?>
		<div class='borda'>
		<form action="" method="get">
		Escolha um numero para multiplicação:  <input type="number" name="number" /><br />
		<input type="submit" name="submit" value="Calcular" />
		</form> 
 <?php 
   
 if(isset($_GET["number"]))
 {
	$n=$_GET["number"];
	
	for($i = 0; $i < 11; $i++)
	{
		echo '<center><b><table><tr><td>'.$n.' x '.$i. ' = '. $i*$n .'</b></td></tr></table></center>';
	}
 }
 
 ?>
 </div>
 </body>
</html>
