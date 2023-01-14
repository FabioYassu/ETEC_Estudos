 <html>
     <head>
	   <title> Exemplo com Botão </title>
	 </head>
	 
	 <body>
		<h1>Escolha as cores da bandeira Brasileira</h1>
		<form action="" method="get">
			<input type="text" name="Cor" >
			<input type="submit" name="bt_submit" 
			value="Enviar cor">
		</form>
 <?php
	//foi apertado algum botão tipo submit	 
   if(isset($_GET["bt_submit"]))
	{
		$Cor=$_GET["Cor"];
		 
		
	
	if ($Cor  == "Verde" or
	    $Cor  == "Amarelo" or
	    $Cor  == "Azul" or
        $Cor  == "Branco")
           {
             echo $Cor ;
 	         echo ' É uma das cores de nossa bandeira!';
             
	   }
	 else
           {
             echo $Cor;
             echo ' Não é uma cor de nossa bandeira!';
           }  
   }
  ?>
     </body>
   </html>
 