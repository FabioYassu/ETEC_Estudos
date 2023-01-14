<!DOCTYPE html>

<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>EXERCICIO 2 - Fabio Yassu - 2TDSN - PWII </title>
	</head>
<body>
<?php

    $nota1 = 3;
    $nota2 = 5;
    $nota3 = 7;
   
    $media = ($nota1 + $nota2 + $nota3) / 3;

    echo 'Olá, Fulano suas notas foram: <br>';
    echo 'Primeiro Bimestre: ' . $nota1 . '<br>';
    echo 'Segundo Bimestre: ' . $nota2 . '<br>';
    echo 'Terceiro Bimestre: ' . $nota3 . '<br>';
    echo 'Sua média final é ' . $media . ' - ';

    if (($media >= 7) && ($media <=9)):
        echo 'Você foi Aprovado!';
	elseif ($media == 10):
        echo 'Você foi Aprovado com Louvor';
    elseif (($media < 7) && ($media >= 5)):
        echo 'Você esta em processo de Exame!';
    else:
        echo 'Você foi reprovado!';
    endif;

?>
</body>
</html>
