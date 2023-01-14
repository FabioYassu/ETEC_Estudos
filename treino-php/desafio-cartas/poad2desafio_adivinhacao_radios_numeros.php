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
					background: GRAY;
					border: 10px 10px;
					border-radius: 12px;
					font-weight: bolder;
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

<div align="center"><b>Pense em um destes números : </div><br>
<center><img src="imagem/CartaP.jpg" width="50%" height="auto"><br><br>
<form name="form1" action="" method="POST"> <!-- Formulario Radio S/N tipo POST -->
				
				 Quais destas imagens abaixo apresenta seu número? <br><br>
				 Selecione Sim ou Não <br><br>
				 <img src="imagem/carta1.jpg" alt="carta1" width="350" height="auto" ><br><br>
				 <input type="radio" name="ope1" value="Sim" required> Sim
				 <input type="radio" name="ope1" value="Não" required> Não<br><br>
					
					
					<img src="imagem/carta2.jpg" alt="carta1" width="350" height="auto" ><br><br>
				 <input type="radio" name="ope2" value="Sim" required> Sim
				 <input type="radio" name="ope2" value="Não" required> Não<br><br>
					
					<img src="imagem/carta3.jpg" alt="carta1" width="350" height="auto" >
					<br><br>
				 <input type="radio" name="ope3" value="Sim" required> Sim
				 <input type="radio" name="ope3" value="Não" required> Não<br><br>
					
					<img src="imagem/carta4.jpg" alt="carta1" width="350" height="auto" >
				 <br><br>
				 <input type="radio" name="ope4" value="Sim" required> Sim
				 <input type="radio" name="ope4" value="Não" required> Não<br><br>
				 
					<img src="imagem/carta5.jpg" alt="carta1" width="350" height="auto" >
				 <br><br>
				 <input type="radio" name="ope5" value="Sim" required> Sim
				 <input type="radio" name="ope5" value="Não" required> Não<br><br>
				 	
				 
				 
			<button name="enviar" type="submit" > CLIQUE AQUI PARA VER SEU NÚMERO: </button>
			</b>
		
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
	$op5=$_POST["ope5"];
	
	$numeroResu=0;
	
	
		
	
	if($op1 == "Sim") $numeroResu=$numeroResu+1;
	if($op2 == "Sim") $numeroResu=$numeroResu+2; 
	if($op3 == "Sim") $numeroResu=$numeroResu+8;
	if($op4 == "Sim") $numeroResu=$numeroResu+4;
	if($op5 == "Sim") $numeroResu=$numeroResu+16;

	if ($numeroResu>0)
	
	echo '<b> O personagem que escolheu é:';
	echo '<br><font size="35">'.$numeroResu.'</font></b>';
	
	
}
	
?>


