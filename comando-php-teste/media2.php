<html>
 <head>
  <title>Media</title>
 </head>
<body>


<form name="calculo" method="get" action="">
 
 <input type="text" name="nota1" value="" /><br>
 
 <input type="text" name="nota2" value="" /><br>
 
 <input type="text" name="nota3" value="" /><br>
 
 <input type="text" name="nota4" value="" /><br>
 
 <input type="text" name="media" readonly="readonly" value="" />
 
 <button>Calcular</button>
 
 </form>

<?php


 $nota1 = $_GET["valor"];

if($num > 0 and $num < 11)
{
	for($i = 0; $i < 11; $i++)
	{
		echo " $i x $num = " . $i*$num . "<br>";
	}
}

?>
</body>
</html>


