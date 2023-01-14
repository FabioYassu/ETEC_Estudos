<!DOCTYPE html>

<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>EXERCICIO 2 - Fabio Yassu - 2TDSN - PWII </title>
		<style>
		.borda {
			margin: auto auto;
			padding:10px;
			width:250px;
			height:auto;
			
			border: 1px solid;
			
		}
		</style>
	</head>
<body>
<div class='borda'>
<?php

	echo '<center><h4>Números Pares 0 a 50 </h4></center>';
      	for($Val=0;$Val <=50;$Val=$Val+2)
         {
           echo '<center><b>'.$Val.'<br> </center>';
         }
?>
</div>
 </body>
 </html>