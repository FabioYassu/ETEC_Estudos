
  <html>
     <head>
	 
	 </head>
	 
	 <body>
		<h1>Média de 2 números</h1>
		<form action="" method="get">
		    Digite o primeiro número:
			<input type="number" name="n1" required="required" > <br>
			Digite o segundo número:
			<input type="number" name="n2" required="required"> <br>
			 
			<input type="submit" value="Calcular a Média"name="bt_submit">
		</form>
	 
	 </body>
  
  </html>
 
<?php
	if(isset($_GET["bt_submit"]))
	{
     $n1=$_GET["n1"];$n2=$_GET["n2"];
    $m=($n1+$n2)/2;
    echo '<b>A média das notas '.$n1.' e '.$n2.' é igual a '.$m;
    
	
	
	}
  ?>