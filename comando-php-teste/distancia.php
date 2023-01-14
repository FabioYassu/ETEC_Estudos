
<html>
 <head>
  <title>Media</title>
 </head>
<body>
<h1> Operações </h1>
		<?php
			$n1="5";
			$n2="9";
		
			echo '<table border="3">';
			echo '<tr><th> numero 1 </th><th> numero 2</th><th> adição </th> <th> subtração</th><th>multiplicação</th>
			<th>divisão</th></tr>';
			echo '<tr><td align="center">'.$n1.'</td>'.'<td align="center">'.$n2.'</td>';
			echo '<td align="center">'.($n1+$n2).'</td>'.'<td align="center">'.($n1-$n2).'</td>'.'<td align="center">'.($n1*$n2).'</td>'
			.'<td align="center">'.($n1/$n2).'</td></tr> </table>';
		?>

</body>
</html>

