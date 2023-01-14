


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MegaSena</title>
<style type="text/css">
div.listarbig 
	   {
		width:355px;
		height:300px;
		overflow: auto;

		}
		BODY {
         background-image: url("megasena.png");
         background-repeat: no-repeat;
        
         background-attachment: fixed;
		 background-position: 85% 36%
		 }
		</style>
</head>
<body>
<form name="megasena" method="get" action="">
	<fieldset>
	<legend> Escolha o número de cartões </legend>
	<input type="text" name="numero" placeholder= "Digite um número de cartões:"  /><br />
	<input type="submit" name="gerar" value="gerar" /> <br /><br />
	</fieldset>
</form>

<div class="listarbig">
<?php

if(isset($_GET["gerar"])) 
{
	
$numero=$_GET["numero"];
 for($k=1;$k<=$numero;$k++)
 {
	 
	 
	 
		
			$sorteio = array();
			for ($i=1; $i<7; $i++) {
			for ($a=1;;$a++) {
			$bola = rand(1,60);
			if (in_array($bola, $sorteio) === FALSE) break;
			}
			$sorteio[$i] = $bola;
			}
		    asort($sorteio);
			echo '<table border=5><tr >';
			foreach($sorteio as $numeros) echo '<td>'.$numeros . '</td>';
			echo "</tr><br>";
            echo '</table>';
			echo '';
	 
	       
 }   
						
}
?>
</div>
 
<div align="center"><h5><hr> By Caê - tente sua sorte !!!! Copyright © 2019 - Todos os direitos reservados <hr></h5></div>
</body>
</html>


