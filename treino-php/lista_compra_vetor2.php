<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<meta charset="utf-8"/>
	<title>Listas de Frutas / Horti Fruti</title>
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
			<center>
			<div class='borda'>
		
				<hr>
				<h1 align="center">Gerando Listas Ordenadas</h1>
				<hr>
				<form action="" name="form1" method="post">
				<label><b>Nome:</label></br>
				<input type="text" required name="nome" ></br></br>
				<label>Qual tipo de contador?</label>
				<h3>[1]Alfabética [2]Romana [3]Arábica</h3>
				<input type="number" required="required" name="opcao" min="1" max="3"></br></br>
				<label>Quantas produtos serão adicionadas?</label>
				<input type="number" required name="qtde" min="1" ></br>


				<input type="submit" value ="Digitar as frutas" name="bt_resultado">
				</form>


				</html>
				<?php
					if(isset($_POST["bt_resultado"]))
					{
					$nome=$_POST["nome"];
					$qtde=$_POST["qtde"];
					$lista="NO";
				?>
					<script>

					fruta=[];
					for (i=1;i<=<?php echo $qtde?>;i++)
					{
						fruta[i]=prompt("Digite uma fruta:");
						//uso variável do javascript, mas a qtde é php ($qtde)

					}

					</script>
				<?php

					// preciso pegar as informações do vetor fruta do javascript e colocar no vetor $fruta do php
					for($i=1;$i<=$qtde;$i++)
					{ 
						$fruta[$i]='<script>document.write(fruta['.$i.']+" ")</script>'; }

						$opcao=$_POST["opcao"];
						//echo 'Opção é '.$opcao;echo ' a lista está '.$lista.'</br>';
						switch ($opcao) {
						case 1:
						{
						echo'<ol type="A">';
						$lista="OK";
						//alert('Opção 1');
						break;
						}
						case 2:
						{
						echo'<ol type="I">';
						$lista="OK";
						//alert('Opção 2');
						break;
						}
						case 3:
						{

						echo'<ol type="1">';
						$lista="OK";
						//alert('Opção 3');
						break;
						}
						default:echo'<script>alert("Opção Inválida !!!")</script>';
						}
						//echo ' a lista está '.$lista.'</br>';
						echo '<b>'.$nome.'</b> essa é sua lista de compra.</br></br><strong>';
						if ($lista=="OK")
						{
						for($i=1;$i<=$qtde;$i++)
						{ echo '<li>'.$fruta[$i].'</li>' ; }
						echo '</ol>';

						} echo '</strong>';

					}
				?>
				</br>
				<hr>
				 <input type='button' onclick='lista_compra_vetor2.php;' value="Limpar">
				<hr>
			</center>
		</body>
</html>