<!DOCTYPE html>
 
<html lang="pt-br"> 
<head>
 <title>Lista de Horti Fruti</title>
  
	  <meta charset="utf-8">
		<style>
			.borda {
				margin: auto auto;
				padding:10px;
				width:300px;
				height:auto;
				
				border: 1px solid;
				
			}
		 </style>
	</head>
<body>
		<div class='borda'>
		<h2> <font color="blue"> Lista de Horti Fruti</h2></font>       
	<br><br>
	Qual seu nome:
	<br>
	 <form action ="" method="post"> 
	<input type="text" name="nome" placeholder="Digite seu nome" required ="required" />
	<br><br>
	
	Escolha forma de apresentação numerica da Lista 
	<ol>
    <li> Lista alfabética </li>
    <li> Lista romana </li>
    <li> Lista numérica </li>
    </ol>
	 
	 
		 
		 <input type="number" name="valor" placeholder="Digite um número" required ="required" />
         <button type='submit' name='enviar'>Criar Lista</button>
	</form>

     
   
	<?php
	  	  	 
      if(isset($_POST['enviar']))
	  
		{
			$valor = $_POST['valor'];
				
			echo "<br>Seja Bem-Vindo ".$_POST['nome']."<br> Esta é sua lista de compra<br><br>"; 
			
			switch($valor)
			{
				  case 1: echo "<ol type='A'>";
				  $lista = "OK";
				  break;
				  
				  case 2: echo "<ol type='I'>";
				  $lista = "OK";
				  break;
				  
				  case 3: echo "<ol type='1'>";
				  $lista = "OK";
				  break;
				  
				  default: 
				  $lista = "KO";
				  echo "Opção inválida<br>";
				  break;
				  
			}
			if($lista == "OK")
			{
				  echo "<li>Framboesa</li>";
				  echo "<li>Morango</li>";
				  echo "<li>Goiaba</li>";
				  echo "<li>Melancia</li>";
				  echo "<li>Abacaxi</li>";
				  echo "<li>Caju</li>";
			}
			else if($lista == "KO")
			{
				echo "<br>Por Favor<br> Digite um numero valido (1, 2 ou 3).";
			}
		}
	?>
		</div>
	</body>
</html>