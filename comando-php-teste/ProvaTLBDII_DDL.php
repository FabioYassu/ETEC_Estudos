<?php
	if(isset($_POST["bt_submit"]))
	{
	$valor=$_POST["valor"];
	Switch($valor)
        {
         case 0: echo "alert('O valor da variavel é 0')</script>";
         break;
         case 1: echo "O valor da variavel é 1";
         break;
	     case 2: echo "O valor da variavel é 2";
         break;
         case 3: echo "O valor da variavel é 3";
         break;
		 case 4: echo "O valor da variavel é 4";
         break;
		 default:echo "ERRO";
        }
	}
  ?>
  <html>
     <head>
	 
	 </head>
	 
	 <body>
		<h1>Teste- Digite valores entre 0 e 4</h1>
		<form action="" method="post">
			<input type="text" name="valor" >
			<input type="submit" name="bt_submit">
		</form>
	 
	 </body>
  
  </html>