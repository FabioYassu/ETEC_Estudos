<!DOCTYPE html>

<html lang= "pt-br">
	<head>
		<meta charset="utf-8">
		<title>EXERCICIOS - Fabio Yassu - 2TDSN - PWII </title>
		<style>
	body  
		{
           	background-image: url(back2.jpg);
			background-attachment: fixed ;
			background-size: 100% ;
			background-repeat: repeat ;
		    margin: 50px;
			text-align: center;
			text-shadow: 3px 3px 10px #FFFFFF, 0 0 25px #FFFFFF, 0 0 3px #FFFFFF;
			font-size: 20px;
			font-style: bold;
			color: black;
		}
		</style>
	</head>
<body>
<h3> Exercicios PHP</h3>
		
<?php

@$pagina = $_GET['a'];

	if(isset($pagina))
	{
		include ("$pagina");
		
	}else{
		echo $pagina;
	}


//echo "<br><a href=\"Menu.php\">Pagina Inicial</a><br>";

echo "<p><b>1)Usando a expressão while, elabore um contador de 1 até 100,<br> 
cuja resposta deverá aparecer no navegador de forma sequencial, separados por vírgula.";
echo "<br><a href=\"opcoes\pergunta(1).php\">Exercicio 1</a><br><br>";

echo "2)Repita o exercício 01, usando a expressão for.";
echo "<br><a href=\"opcoes\pergunta(2).php\">Exercicio 2</a><br><br>";

echo "3)Usando a expressão while, repita o exercício 01, mas somente <br>
 os números pares deverão ser visualizados.";
echo "<br><a href=\"opcoes\pergunta(3).php\">Exercicio 3 </a><br><br>";

echo "4)Usando a expressão for, mostre a tabuada dos 05 (cinco), no seguinte formato:";
echo "<br><a href=\"opcoes\pergunta(4).php\">Exercicio 4</a><br><br>";

echo "5)Faça agora um exercício que faça o fatorial de 5 .";
echo "<br><a href=\"opcoes\pergunta(5).php\"> Exercicio 5</a><br><br>";

echo "6)Faça agora um exercício que faça o fatorial de qualquer número escolhido pelo usuário";
echo "<br><a href=\"opcoes\pergunta(6).php\"> Exercicio 6</a><br><br>";

echo "7)Faça um programa que peça um número qualquer e execute sua tabuada numa tabela.";
echo "<br><a href=\"opcoes\pergunta(7).php\">Exercicio 7</a><br><br>";

echo "8)Faça um programa que desenvolva o delta ( obs: usuário deve escolher os valores)";
echo "<br><a href=\"opcoes\pergunta(8).php\">Exercicio 8 </a><br><br>";

echo "9)Faça um programa receba a quilometragem inicial , final e litros abastecidos.<br> 
Depois calcule a distância percorrida  e após isso calcule a média que o carro <br>
está fazendo de quilômetros por litros abastecidos.";
echo "<br><a href=\"opcoes\pergunta(9).php\"> Exercicio 9 </a><br><br>";

echo "10)Receba um número qualquer e depois calcule o dobro, triplo e metade dele.";
echo "<br><a href=\"opcoes\pergunta(10).php\">  Exercicio 10 </a><br><br></p></b>";


?>

</body>


