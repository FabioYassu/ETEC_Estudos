<?php
error_reporting(0);
ini_set(“display_errors”, 0 );           
?>

<?php
require_once('conexao.php');
try{
if(isset($_POST["inserir"])) 
{
	$nome=$_POST["nome"];
	$funcao=$_POST["funcao"];
	$contato=$_POST["contato"];	
	$celular=$_POST["celular"];
	
	$query_inserir_contato="INSERT INTO tb_habitante (nome,funcao,contato,celular) VALUES ('$nome','$funcao','$contato','$celular')";
	
	$sql_inserir_contato=mysql_query($query_inserir_contato);
	
	if($sql_inserir_contato)
	echo "<H3>CONTATO CADASTRADO COM SUCESSO</H3> <BR>";
	else
	echo "<H3>FALHA AO CADASTRAR O CONTATO</H3> <BR>";	


}
}catch(Exception $e){

   echo $e;

}
?>

<!DOCTYPE HTML>
 <html lang="pt-br">
<head>
    <meta charset="utf-8"/> 
<title>Agenda</title>
</head>

<title>Inserir dados na agenda</title>
<style type="text/css">
 
   .txtarea {
	background-color: #87CEFF;
    height: 20px;
    width: 300px;
	
	
}

   .selecionar {
   background-color: #87CEFF;
    height: 20px;
    width: 220px;
		
}
</style>
</head>

<body>
<h1>INSERIR CONTATO</h1>
<ul>
	<li><a href="index.php">Listar Contatos</a></li>
</ul>


<form id="form_agenda" name="form_agenda" method="post" action="">
  <p>
    <label for="nome">Nome:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="nome" id="nome" placeholder="Digite o Nome " required   class="txtarea " />
    <br />
	<label for="funcao">Função:</label>
  	<input type="text" name="funcao" id="funcao" placeholder="Digite o funcao " required="required" class="txtarea" />
    <br />
    <label for="contato">Contato:</label>
    <input type="contato" name="contato" id="contato" placeholder="Coloque e-mail válido"required="required"class="txtarea"/>
    <br />    
    <label for="celular">Celular</label>
    <input type="text" name="celular" id="celular"  placeholder="Digite o Celular "  />
    <br />
    <input type="submit" name="inserir" id="inserir" value="Inserir" />
<br />
  </p>
</form>



</body>
</html>
