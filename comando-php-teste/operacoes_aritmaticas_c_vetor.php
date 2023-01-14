
<html>
 <head>
  <title>Media</title>
 </head>
<body>
<h1> Operações c/ Vetor </h1>
		<?php
			$n1="5";
			$n2="9";
			$op[0]=$n1+$n2;
			$op[1]=$n1-$n2;
			$op[2]=$n1*$n2;
			$op[3]=$n1/$n2;
			
		
			echo '<table border="3">';
			echo '<tr><th> numero 1 </th><th> numero 2</th><th> adição </th> <th> subtração</th><th>multiplicação</th>
			<th>divisão</th></tr>';
			echo '<tr><td align="center">'.$n1.'</td>'.'<td align="center">'.$n2.'</td>';
			echo '<td align="center">'.$op[0].'</td>'.'<td align="center">'.$op[1].'</td>'.'<td align="center">'.$op[2].'</td>'
			.'<td align="center">'.$op[3].'</td></tr> </table>';
		?>

</body>
</html>

