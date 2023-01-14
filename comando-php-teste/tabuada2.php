<html>
 <head>
  <title>Tabuada</title>
 </head>
<body>
 
 <form name="Tab" method="get">
 Informe um valor de 0 a 10: <input type="text" value=" " name="valor">
 <input type="submit" value = "Iniciar">
 </form>


<?php

 $num = $_GET["valor"];

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