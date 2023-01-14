 <?php
	if(isset($_POST["bt_submit"]))
	{
	$valor=$_POST["valor"];
	Switch($valor)
        {
         case 0: echo "<script>alert('O valor da variavel é 0')</script>";
         break;
	 
         case 1: echo "<script>alert('O valor da variavel é 1')</script>";
         break;
	 
	 
         case 2: echo "<script>alert('O valor da variavel é 2')</script>";
         break;

	 
         case 3: echo "<script>alert('O valor da variavel é 3')</script>";
         break;

         
         case 4: echo "<script>alert('O valor da variavel é 4')</script>";
         break;
        }
	}
  ?>
  <html>
     <head>
	 
	 </head>
	 
	 <body>
		<h1>Teste</h1>
		<form action="" method="post">
			<input type="text" name="valor" >
			<input type="submit" name="bt_submit">
		</form>
	 
	 </body>
  
  </html>
 