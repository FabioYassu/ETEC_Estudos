<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title>Fatorial</title>
</head>
<body>

<h1>Fatorial</h1>
		<form action="" method="GET">
		    Digite um  número:
			<input type="number" name="n1" > <br>
			
			 
			<input type="submit" value="Calcular o Fatorial"name="fatoriando">
		</form>

</body>
</html>
<?php
$fatorial=1;$verifica="NO";
	if(isset($_GET["fatoriando"]))
	{
			 $n1=$_GET["n1"];
			 
			 echo $n1."!=";
	    if ($n1==0)
		{
			echo $fatorial;
			$verifica="YES";
		}
		if ($verifica =="NO")
		{
		if ($n1==1) 
			echo $n1;
		else{
		for ($i = 1; $i <= $n1; $i++) {
				
				if ($i==$n1)
				{
					echo $i."=";
				}
				else
				{
					echo $i."x";
					
				}
				
				
				$fatorial=$fatorial*$i;
			}
			IF ($verifica=="NO")
			{echo $fatorial;}
			
		}
		}
	}
	
  ?>

