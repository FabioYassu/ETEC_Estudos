
  <html>
     <head>
	 
	 </head>
	 
	 <body>
		<h1>Média de 2 números</h1>
		<form action="" method="post">
		    Digite o primeiro número:
			<input type="number" name="n1" required="required" > <br>
			Digite o segundo número:
			<input type="number" name="n2" required="required"> <br>
			 
			<input type="submit" value="Calcular a Média"name="bt_submit">
		</form>
	 
	 </body>
  
  </html>
 
 <?php
	if(isset($_POST["bt_submit"]))
	{
     $n1=$_POST["n1"];
	 $n2=$_POST["n2"];
     $m=($n1+$n2)/2;
    echo '<b>A média das notas '.$n1.' e '.$n2.' é igual a '.$m;
    
	
	
	}
  ?>