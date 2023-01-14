
<!DOCTYPE! html>
<HTML>
	<HEAD>
		<style>

			body  {
            
				
			background-image: url(back2.jpg);
			background-attachment: fixed ;
			background-size: 100% ;
			background-repeat: no-repeat ;
			background-color: #FFFFFF ;
		    margin: 50px;
			text-align: left;
			text-shadow: 3px 3px 10px #FFFFFF, 0 0 25px #FFFFFF, 0 0 3px #FFFFFF;
			font-size: 30px;
			font-style: bold;
			color: black;
			
				             
             }
		</style>
			<TITLE>	Jogos de Adivinhação	</TITLE>

		
	</head>
<body>
<h3> DESAFIO DAS CARTAS</h3>
		<h4> ESCOLHA O DESAFIO </h4>
</body>
	

		
<?php

echo "<br><a href=\"Menu.php\">Pagina Inicial</a>";

echo "<br><a href=\"Menu.php?a=poad2desafio_adivinhacao_checkbox.php\">Escolha Personagem (CheckBox)</a>";
echo "<br><a href=\"Menu.php?a=poad2desafio_adivinhacao_radios.php\">Escolha Pesonagem (Radios)</a>";
echo "<br><a href=\"Menu.php?a=poad2desafio_adivinhacao_radios_numeros.php\">Escolha Numero</a>";

@$pagina = $_GET['a'];

	if(isset($pagina))
	{
		include $pagina;
	}else{
		echo '<b><font color="RED" size="12" <br><br>Fabio Henrique Ferreira Yassu Nakama - 2TDSN - PWII</font></b>';
	}


?>




