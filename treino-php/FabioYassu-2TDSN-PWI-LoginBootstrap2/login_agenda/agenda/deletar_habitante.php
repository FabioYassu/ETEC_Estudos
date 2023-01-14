<?php
error_reporting(0);
ini_set(“display_errors”, 0 );           
?>

<?php
require_once('conexao.php');
if(isset($_GET["id_habitante"]))
{
	
  
	
  $id_habitante=$_GET["id_habitante"];
  //$query="DELETE FROM tb_habitantes WHERE id_habitante={$_GET['id_habitante']}";
  $query="DELETE FROM tb_habitante WHERE id_habitante=$id_habitante";
  $sql=mysql_query($query);
  
  if($sql)
  {
	  echo"<script type=\"text/javascript\">alert('Deletado com Sucesso !!!');</script>"; 
	  header("Location:index.php");
  }
  else
  {
	echo"<script type=\"text/javascript\">alert('FALHA AO DELETAR.ENTRE EM CONTATO COM O ADMINISTRADOR DO SITE');</script>";    
	exit;
  }
} else
{
	echo"<script type=\"text/javascript\">alert('Acesso não permitido!!!');</script>"; 
	echo '<a href ="index.php">Voltar</a>';
	
}



?> 