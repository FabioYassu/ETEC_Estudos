<!DOCTYPE html>
 <HTML>
	<HEAD>
	<meta charset="utf-8">
	<TITLE>Desafio das Cartas Checkbox</TITLE>
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
		
		
		<h4> Escolha mentalmente um deste personagens: </h4>
		<img src="image/CartaP.jpg" alt="carta principal" width="50%" height="50%" align="center"> 

		
		 <p> <b> marque as cartas que contenham
		 <br> o seu personagem : 
		 
		 <form name="form1" action="" method="POST"> 
				
				<table style="width:100%">
				
				<tr>
					<td> Carta 1 <input type="checkbox" name="grupo1" id="um" value="true"> </td>
					<td> Carta 2 <input type="checkbox" name="grupo2" id="dois" value="true"></td>
				</tr>
				<tr>
					<td> <img src="image/carta1.jpg" alt="carta1" width="80%" height="80%" align="left"></td>
					<td> <img src="image/carta2.jpg" alt="carta2" width="80%" height="80%" align="center"></td>
				</tr>
				<tr>

					<td> Carta 3 <input type="checkbox" name="grupo3" id="tres" value="true"></td>
					<td> Carta 4 <input type="checkbox" name="grupo4" id="quatro" value="true"></td>
				</tr>
				<tr>
					<td><img src="image/carta3.jpg" alt="carta3" width="80%" height="80%" align="left"></td>
					<td><img src="image/carta4.jpg" alt="carta4" width="80%" height="80%" align="center"></td>
				</tr>
  
				<tr>  
					<td colspan="2"> <button name="enviar" type="submit" > CLIQUE AQUI PARA VER SUA CARTA: </button> </td>
				</tr>
			
  
			</table>
			
				
			</form> 

	
</BODY>
</HTML>


<?php  //Calculo para escolha de imagem

if(isset($_POST["enviar"])) // Verifica se formulario foi enviado
{
	if(isset($_POST["imagem"])){
		$Vcarta=$_POST["imagem"];
	}
	
	if(isset($_POST["grupo1"])){
		$Vgrupo1=$_POST["grupo1"];
	}
	
	if(isset($_POST["grupo2"])){
		$Vgrupo2=$_POST["grupo2"];
	}
	
	if(isset($_POST["grupo3"])){
		$Vgrupo3=$_POST["grupo3"];
	}
	
	if(isset($_POST["grupo4"])){
		$Vgrupo4=$_POST["grupo4"];
	}
	
	$contador=0;
	
	
	if(isset($_POST["grupo1"])){
		if($Vgrupo1 == "true") $contador=$contador+1;
	}
	
	if(isset($_POST["grupo2"])){
		if($Vgrupo2 == "true") $contador=$contador+2; 
	}
	
	if(isset($_POST["grupo3"])){
		if($Vgrupo3 == "true") $contador=$contador+8;
	}
	
	if(isset($_POST["grupo4"])){
		if($Vgrupo4 == "true") $contador=$contador+4;
	}
	
	$numeroImagem = $contador;
	$imagem = "image/imagem%20(".$numeroImagem.").jpg";
	
	switch($contador) {
	  case 1: 
		echo '<a href='.$imagem.' target="_blank"> 
		<img src='.$imagem.' border=0 name="imagem" id="carta" >
		</a>'; 
		break;
	  case 2:
		echo '<a href='.$imagem.' target="_blank"> 
		<img src='.$imagem.' border=0 name="imagem" id="carta" >
		</a>';
	 	break;
	  case 3:
		echo '<a href='.$imagem.' target="_blank"> 
		<img src='.$imagem.' border=0 name="imagem" id="carta" >
		</a>';
		break;
	  case 4:
		echo '<a href='.$imagem.' target="_blank"> 
		<img src='.$imagem.' border=0 name="imagem" id="carta">
		</a>';
		break;
	  case 5:
		echo '<a href='.$imagem.' target="_blank"> 
		<img src='.$imagem.' border=0 name="imagem" id="carta" >
		</a>';
		break;
	  case 6:
		echo '<a href='.$imagem.' target="_blank"> 
		<img src='.$imagem.' border=0 name="imagem" id="carta" >
		</a>';
		break;
	  case 7:
		echo '<a href='.$imagem.' target="_blank"> 
		<img src='.$imagem.' border=0 name="imagem" id="carta" >
		</a>';
		break;
	  case 8:
		echo '<a href='.$imagem.' target="_blank"> 
		<img src='.$imagem.' border=0 name="imagem" id="carta" >
		</a>';
		break;
	  case 9:
		echo '<a href='.$imagem.' target="_blank"> 
		<img src='.$imagem.' border=0 name="imagem" id="carta" >
		</a>';
		break;
	  case 10:
		echo '<a href='.$imagem.' target="_blank"> 
		<img src='.$imagem.' border=0 name="imagem" id="carta" >
		</a>';
		break;
	  case 11:
		echo '<a href='.$imagem.' target="_blank"> 
		<img src='.$imagem.' border=0 name="imagem" id="carta" >
		</a>';
		break;
	  case 12:
		echo '<a href='.$imagem.' target="_blank"> 
		<img src='.$imagem.' border=0 name="imagem" id="carta" >
		</a>';
		break;
	  case 13:
		echo '<a href='.$imagem.' target="_blank"> 
		<img src='.$imagem.' border=0 name="imagem" id="carta" >
		</a>';
		break;
	  case 14:
		echo '<a href='.$imagem.' target="_blank"> 
		<img src='.$imagem.' border=0 name="imagem" id="carta" >
		</a>';
		break;
	  case 15:
		echo '<a href='.$imagem.' target="_blank"> 
		<img src='.$imagem.' border=0 name="imagem" id="carta" >
		</a>';
		break;
				
	 default:
		echo ' Favor selecionar pelo menos um Grupo  ';
	}
	
		
}
	
	
 
?>
		 		 
		

		






