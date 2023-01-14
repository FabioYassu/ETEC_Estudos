<!DOCTYPE! html>
<HTML>
	<HEAD>
		<TITLE>	Desafio das Cartas Radios	</TITLE>
	</HEAD>
		<style>
			body  {
					background-image: url(imagem/back.jpg);
					background-attachment: fixed ;
					background-size: 100% ;					
					background-repeat: no-repeat ;
					background-color: #FFFFFF ;
					
					margin: 50px;
					text-align: center;
					text-shadow: 3px 3px 10px #FFFFFF, 0 0 25px #FFFFFF, 0 0 3px #FFFFFF;
					font-size: 30px;
					font-style: bold;
					color: black;
					
									 
					 }
										 
					button {
					background: #14AA70;
					border: 10px 10px;
					border-radius: 12px;
					color: WHITE;
					padding: 15px 32px;
					text-align: center;
					text-decoration:none;
					display: inline-block;
					font-size: 16px;
					font-style: bold;
					margin: 4px 2px;
					cursor: pointer;
					}
		</style>
<BODY>

<div align="center"><b>Pense em um desses personagens: </div>
<center><img src="image/CartaP.jpg" width="50%" height="auto"><br><br>
<form name="form1" action="" method="POST"> <!-- Formulario Radio S/N tipo POST -->
				
				 Quais destas imagens abaixo apresenta seu personagem? <br><br>
				 Selecione Sim ou Não <br><br>
				 <img src="image/carta1.jpg" alt="carta1" width="350" height="auto" ><br><br>
				 <input type="radio" name="ope1" value="Sim" required> Sim
				 <input type="radio" name="ope1" value="Não" required> Não<br><br>
					
					
					<img src="image/carta2.jpg" alt="carta1" width="350" height="auto" ><br><br>
				 <input type="radio" name="ope2" value="Sim" required> Sim
				 <input type="radio" name="ope2" value="Não" required> Não<br><br>
					
					<img src="image/carta3.jpg" alt="carta1" width="350" height="auto" >
					<br><br>
				 <input type="radio" name="ope3" value="Sim" required> Sim
				 <input type="radio" name="ope3" value="Não" required> Não<br><br>
					
					<img src="image/carta4.jpg" alt="carta1" width="350" height="auto" >
				 <br><br>
				 <input type="radio" name="ope4" value="Sim" required> Sim
				 <input type="radio" name="ope4" value="Não" required> Não<br><br>
				 	</b>
				 
				 
			<button name="enviar" type="submit" > CLIQUE AQUI PARA VER SEU PERSONAGEM: </button>
			
				</form> <!-- Fim formulario de Radios -->
			
</BODY>
</HTML>





<?php  //Calculo para escolha de imagem

if(isset($_POST["enviar"])) // Verefica se formulario foi enviado
{
	
	$op1=$_POST["ope1"];
	$op2=$_POST["ope2"];
	$op3=$_POST["ope3"];
	$op4=$_POST["ope4"];
	
	$numeroResu=0;
	
	
		
	
	if($op1 == "Sim") $numeroResu=$numeroResu+1;
	if($op2 == "Sim") $numeroResu=$numeroResu+2; 
	if($op3 == "Sim") $numeroResu=$numeroResu+8;
	if($op4 == "Sim") $numeroResu=$numeroResu+4;

	if ($numeroResu>0)
	$image = "image/imagem%20(".$numeroResu.").jpg"; //converte numero resultado em imagem
	echo ' O personagem que escolheu é:';
	echo '<div class="imagem">
	<a href='.$image.' target="_blank"> <img src='.$image.' /></a><br/></div>'; //chama image que foi convertido
	
}
	
?>


