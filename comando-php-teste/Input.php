
 <?php
	if(isset($_POST["bt_submit"]))
	{
	$nome=$_POST["nome"];$sobrenome=$_POST["sobrenome"];$idade=$_POST["idade"];
    $idfut=$idade+20;
    echo '<b>Nome =</b>'.$nome;
    echo '<br><br>';
    echo '<b>Sobenome =</b>'.$sobrenome;
    echo '<br><br>';
    echo 'Sua idade atual é '.$idade. ' anos ';
    echo '<br><br>';
    echo 'Daqui vinte anos, você terá '.$idfut.' anos';
	
	
	}
  ?>
  <html>
     <head>
	 
	 </head>
	 
	 <body>
		<h1>Previsão daqui 20 anos</h1>
		<form action="" method="post">
		    Digite seu nome:
			<input type="text" name="nome" > <br>
			Digite seu Sobre-nome:
			<input type="text" name="sobrenome" > <br>
			Digite sua idade:
			<input type="text" name="idade" > <br>
			<input type="submit" value="Calcular Idade"name="bt_submit">
		</form>
	 
	 </body>
  
  </html>
 