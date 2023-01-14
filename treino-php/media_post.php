<!DOCTYPE html>

<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>EXERCICIO 2 - Fabio Yassu - 2TDSN - PWII </title>
		<style>	
		.borda {
			margin: auto auto;
			padding:10px;
			width:255px;
			height:auto;
			
			border: 1px solid;
			
		}
		</style>  
	</head>
<body>
	<form method="post" action="">
	<div class='borda'>
        <b><label>Nome : </label><BR>
        <input name="nome" type="text">
        <BR>
        <label>1° Bimestre :</label><BR>
        <input name="nota1" type="text">
        <BR>
        <label>2° Bimestre :</label><BR>
        <input name="nota2" type="text">
        <BR>
        <label>3° Bimestre :</label><BR>
        <input name="nota3" type="text">
        <BR><BR>
        <button type="submit" name="enviar">Verificar Média</button>
        <button type="reset">Limpar</button>
		</b>
		<BR><BR>
	</form>

<?php
if (isset($_POST['enviar'])):
    $aluno = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
  	  
    $media = ($nota1 + $nota2 + $nota3) / 3;
	
	$media = number_format($media, 2, '.', '');
	
	echo 'Olá ' . $aluno .' <BR>Suas Notas Foram: <BR>';
    echo 'Primeiro Bimestre: ' . $nota1 . '<BR>';
	echo 'Segundo Bimestre: ' . $nota2 . '<BR>';
	echo 'Terceiro Bimestre: ' . $nota3 . '<BR>';
	
	if (($media >= 7) && ($media < 10)):
     
		echo 'Sua Média Final é <font color="blue">' . $media . '</font><BR>';
		echo '<font color="blue">Você foi Aprovado!</font>';
	elseif ($media == 10):
		echo 'Sua média final é <b><font color="blue">' . $media . '</font></b><BR>';
        echo '<b><font color="blue">Você foi Aprovado com Louvor</font></b>';
    elseif (($media < 7) && ($media >= 5)):
		echo 'Sua Média Final é <font color="orange">' . $media . '</font><BR>';
        echo '<font color="orange">Você esta em processo de Exame!</font>';
    else:
		echo 'Sua Média Final é <font color="red">' . $media . '</font><BR>';
        echo '<font color="red">Você foi reprovado!</font>';
    endif;
endif;
?>
     </div>
    </body>
</html>