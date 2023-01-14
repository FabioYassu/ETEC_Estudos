
<?php
error_reporting(0);
ini_set(“display_errors”, 0 );           
?>

<?php
require_once('conexao.php');


if(isset($_GET["id_habitante"])) 
{
	$id_habitante=$_GET["id_habitante"];
}
elseif(isset($_POST["id_habitante"]))
{
	$id_habitante=$_POST["id_habitante"];
}	
else
echo "ERRO !!!";



	$query_select_habitante_id="SELECT * FROM tb_habitante WHERE id_habitante=$id_habitante";
	$sql_select_habitante_id=mysql_query($query_select_habitante_id);

	if($sql_select_habitante_id == false)
	{
		
		echo "-FALHA AO CONSULTAR CONTATO FAVOR ENTRAR EM CONTATO COM O ADMINISTRADOR";
		exit;
	}
	
	while($array_select_habitante_id=mysql_fetch_array($sql_select_habitante_id))
	{
		$id_habitante=$array_select_habitante_id["id_habitante"];
		$nome=$array_select_habitante_id["nome"];
		$funcao=$array_select_habitante_id["funcao"];
		$contato=$array_select_habitante_id["contato"];
		$celular=$array_select_habitante_id["celular"];
		
	}
	if(isset($_POST['submit_editar']))
	{
	     $id_habitante=$_POST['id_habitante'];
	     $nome=$_POST['nome'];
	     $funcao=$_POST['funcao'];
	     $contato=$_POST['contato'];	     
		 $celular=$_POST['celular'];
				 
		 
		 
$query_update="UPDATE tb_habitante SET nome='$nome',funcao='$funcao',contato='$contato',celular='$celular' WHERE id_habitante=$id_habitante";
		 
		 $sql_update=mysql_query($query_update);
		 if($sql_update == true)
		 {
		   echo"<script type=\"text/javascript\">alert('DADOS EDITADOS COM SUCESSO');</script>";
		 header("Location:index.php");
 
		 }
		 else
         echo"<script type=\"text/javascript\">alert('FALHA AO EDITAR.ENTRE EM CONTATO COM O ADMINISTRADOR DO SITE');</script>";	 		 		 
	}
if(isset($_POST['submit_deletar']))
	{
			
  
	
  $id_habitante=$_GET["id_habitante"];
  //$query="DELETE FROM tb_habitantes WHERE id_habitante={$_GET['id_habitante']}";
  $query="DELETE FROM tb_habitante WHERE id_habitante=$id_habitante";
  $sql=mysql_query($query);
  
  if($sql)
  {
	  header("Location:index.php");
  }
  else
  {
	echo"<script type=\"text/javascript\">alert('FALHA AO DELETAR.ENTRE EM CONTATO COM O ADMINISTRADOR DO SITE');</script>";    
	exit;
  }
 }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar</title>
</head>

<body>
<h1>LISTAR CONTATOS<br />
  <br />
</h1>
<ul>
	<li><a href="index.php" onclick="return confirm('Deseja listar habitantes?');">Listar Contatos</a></li>
</ul>


<form id="form_agenda" name="form_agenda" method="post" action="">
  <p>
    <input type="hidden" name="id_habitante" value="<?php echo $id_habitante;?>"/>
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="<?php print($nome);?>"/>
    <br />
	<label for="funcao">funcao:</label>
  	<input type="text" name="funcao" id="funcao" value="<?=$funcao;?>"/>
    <br />
    <label for="contato">Email:</label>
    <input type="text" name="contato" id="contato" value="<?php echo $contato?>"/>
    <br />
    <label for="celular">Celular</label>
    <input type="text" name="celular" id="celularefone" value="<?php print($celular)?>" />    
    <br />
    <input type="submit" name="submit_editar" id="editar" value="Gravar alterações" />
     <!-- <input type="submit" name="submit_deletar" id="deletar" value="Deletar" onclick="return true;" /> -->
	 <input type="submit" name="submit_deletar" id="deletar" value="Deletar" onclick="return confirm('Confirma a exclusão ?');" />

<br />
  </p>
</form>



</body>
</html>
