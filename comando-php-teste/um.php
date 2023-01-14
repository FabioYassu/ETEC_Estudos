<?php  
  // php é uma linguagem fracamente tipificada
  $a=1;// valor inteiro
  $salario=5000.11; // valor decimal
  $acrescimo=0.2;// valor decimal
  $nome="Professor Carlos Eduardo";// string
  echo "<hr>"."A variavel a é igual a ".$a."<hr>";
  echo "<hr>"."O salário  é igual a ".$salario."<hr>";
  $calculo=$salario*($acrescimo+1);
  echo "<hr>"."O salário com 20% de aumento é "
   .$calculo."<hr>";
  echo "<hr>"."Boa noite  ".$nome;
?> 