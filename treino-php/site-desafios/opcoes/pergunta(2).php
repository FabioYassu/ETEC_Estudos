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
						padding:20px;
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
				
			
			for($i = 1; $i <= 100; $i++)
			{
				if($i == 100)
				{
					echo  ('td'. $i .'.</td>');
				}
				else
				{
					echo ($i.',');
				}
			}
			
			
		?>
		<label><b><br><br>Ps.: Não consegui centralizar e alinhar os resultados do for, até pq não descobri o porque disso ocorrer.'^^ </b></label>
			</div>
		</body>
</html>

 
