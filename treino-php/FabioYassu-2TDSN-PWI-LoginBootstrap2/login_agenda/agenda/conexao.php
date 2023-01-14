<?php
//ini_set('default_charset', 'UTF-8');
//CONEXAO AO SERVIDOR
$conexao=mysql_connect("localhost","root","");// se fosse uwamp seria  ("localhost","root","root");
//$link = mysql_connect('localhost', 'user', 'password');
mysql_set_charset('utf8',$conexão);
mysql_query("SET NAMES 'utf8'"); 
mysql_query('SET character_set_connection=utf8'); 
mysql_query('SET character_set_client=utf8'); 
mysql_query('SET character_set_results=utf8'); 
//if($conexao)
	
if($conexao != false)//if($conexao == true)  ou ainda if($conexao)
{
 echo"<center><h5><span style='background color:deeppink;' class='badge round pill'>Conexão estabelicida com sucesso</span></h5></center> <br />";
}
else
{
 echo "<h3>FALHA AO CONECTAR</h3><br>";
 exit; // TERMINA O PROGRAMA
}
 
$banco_de_dados=mysql_select_db("bd_habitante");// use agenda2 , abra o banco de dados agenda2


//CONEXAO AO BANDO DE DADOS
if($banco_de_dados)//if($banco_de_dados==true)   if($banco_de_dados!=false)
{
 echo"<center><h5><span class='badge rounded-pill bg-info text-dark'>Conectado</span></h5></center> <br />";
}
else
{
  echo "<h3>FALHA AO CONECTAR AO BANCO DE DADOS</h3><br>";
  exit;
}

?>
  
  
  
  

