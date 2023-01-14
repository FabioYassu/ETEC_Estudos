 <html>
     <head>
	 
	 </head>
	 
	 <body>
		<h1>Digite as cores da bandeira Brasileira</h1>
		<form action="" method="post">
			
			<SELECT NAME="Cor">
                              <OPTION VALUE="Verde">Verde
                              <OPTION VALUE="Amarelo">Amarelo
                              <OPTION VALUE="Azul">Azul
                              <OPTION VALUE="Branco">Branco
							  <OPTION VALUE="Vermelho">Vermelho
                             </SELECT><P>
			
			
			
			<input type="submit" name="bt_submit">
		</form>
 <?php
		 
   if(isset($_POST["bt_submit"]))
	{
		$Cor=$_POST["Cor"];
		 	
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
 