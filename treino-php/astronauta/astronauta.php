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
	<div class='borda'>
		<form method='post' action=''>
			<label><b>Digite Hora Decorrida :</b></label><BR>
            <input name='hora' type='text'>
            <BR>
           
            <button type='submit' name='enviar'>Verificar Cilindros</button>
            <button type='reset'>Limpar</button>
			<BR><BR>
		</form>

<?php
	echo 'Quantidade Cilindro Inicial: 10 <BR>';
    echo 'Tempo de Missão: 20h <BR><BR>';
	
if (isset($_POST['enviar'])):
    $astro = 10;
    $hora = 20;	
	$horadeco = $_POST['hora'];
	 
	$horarest = ($astro*2 - $horadeco);
	$cilirest = ($horarest/2);

	
	
    echo 'Tempo Decorrido da Missão: ' . $horadeco . 'h<BR>';
    echo 'Cilindros Oxigenio Restantes: ' . $cilirest . '<BR>';
	echo 'Horas Restante da Missão: ' . $horarest . 'h<BR>';
	
 
	
	if (($cilirest > 10) && ($cilirest <=19)):
        echo '<BR><center>Restam '. $cilirest .'<BR> - Carga de Oxigenio Nivel Estável -</center>';
	elseif ($cilirest == 10):
         echo '<BR><center>Restam '. $cilirest .'<BR> - Carga de Oxigenio Completa -</center>';
    elseif (($cilirest < 10) && ($cilirest >= 3)):
         echo '<BR><center>Restam '. $cilirest .'<BR> - Carga de Oxigenio Nivel Baixo -</center>';
	elseif (($cilirest <= 2.5) && ($cilirest >= 1)) :
         echo '<BR><center>Restam '. $cilirest .'<BR> - Carga de Oxigenio em Nivel Critico -</center>';
	elseif (($cilirest >= 0.4) && ($cilirest < 1)) :
         echo '<BR><center>Restam '. $cilirest .'<BR> - Carga de Oxigenio em Meio Tanque -</center>';
	elseif ($cilirest < 0) :
         echo '<BR> - Carga de Oxigenio Abaixo de Zero - <BR><BR><font color="blue"><center> COMO PODE ESTAR VIVO ?</font><BR>. . . . . . . . . . . . . . . . . 
		 <BR><b><font color="red">ALERTA ZUMBI!<BR>ALERTA ZUMBI!</font></b>		
		 <BR><font color="blue">COMUNICANDO A CENTRAL....<BR><font color="Gray">CENTRAL DESCONECTADA</font>
		 <br><img src="zumbi.jpg"></center></img></center>';
			 
    else:
       echo '<BR><center>Carga de Oxigenio 0 <BR><br><img src="gameover.jpg"></center></img>';
    endif; 
endif;

?>
		</div>
    </body>
</html>