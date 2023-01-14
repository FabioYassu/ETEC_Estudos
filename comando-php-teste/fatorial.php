<html>
<link href="styleform.css" rel="stylesheet" />
		<title>Calculando Fatorial</title>
		<link href="styleform.css" rel="stylesheet" />
		</head>

		<body>
		<form method="post" action="fatorial.php">
			<fieldset>
			<legend> Calcule o Fatorial </legend>
			<input type="text" name="num" placeholder= "Digite um número"  />!<br />
			<input type="submit" name="calcular" value="Calcular" /><br /><br />
			</fieldset>
		</form>
		</body>
		</html>

<?php 

$numero = $_POST["num"];

function fatorial ($n)
{

if ($n == 1) return 1;
else 
return $n * fatorial ($n-1);
}	

echo "$numero!= ($numero).($numero-1).($numero-2).($numero-3)...<br>";
echo "O Fatorial de $numero é:</b>".Fatorial($numero);

?>
<a href ="calculandofatorial.html"> <br> Tente Novamente</a>
<a href ="menu.html"> <br> Voltar ao menu</a>
</html>