 
  <html>
     <head>
	 
	 </head>
	 
	 <body>
		<h1>Tabuadas</h1>
		<form action="" method="post">
		     Digite um numero:
			<input type="number" name="valor" required="required" >
			<input type="submit" name="bt_submit" value ="Calcular">
		</form>
	 
	 </body>
  
  </html>
 <?php
	if(isset($_POST["bt_submit"]))
	{
	$valor=$_POST["valor"];
	echo '<font color="blue" face= "Times New Roman" size="5">';
	for($n=0;$n <=10;$n++)
         { // inicio do for
              
			  $tab=$n*$valor;
               echo $n." x ".$valor." = ".$tab."<br>";
             			  
			  
          }//fim do for
	   echo '</font>';
	}
  ?>