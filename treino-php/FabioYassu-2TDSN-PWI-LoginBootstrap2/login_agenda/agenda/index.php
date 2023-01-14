<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	


<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>Habitantes</title>
		<style type="text/css">
		body 
		{
			background-image: url("https://wallpaperaccess.com/full/3139549.jpg");
			background-attachment: fixed ;
			background-size: 100% ;
			background-repeat: repeat ;		
		    
		}
		.listarbig 
		{
			width:788px;
			height:200px;
			overflow: auto;

		}
		 #celula1 
		{
			width: 100px;
			padding:10px;
			background-color:#87CEFF;		 
		}
		</style>
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark justify-content-between">
			<a class="navbar-brand" href="..\privado.php">Home</a>
			<ul class="navbar-nav">
				<li class="nav-item">
				<a class="nav-link" href="..\sobre.php">Sobre </a>
				</li>
			</ul>
			<ul  class="navbar-nav">
				<li class="nav-item">
				<a class="nav-link" href="..\historia.php">História</a>
				</li>
			</ul>
			<ul  class="navbar-nav">
				<li class="nav-item">
				<a class="nav-link" href="index.php">Agenda</a>
				</li> 
			</ul>					
			<ul  class="navbar-nav ">
				<li class="nav-item">
				<a class="nav-link" href="..\logout.php">Logout</a>
				</li>  
			</ul>  
		</nav>
		<?php
			error_reporting(0);
			ini_set(“display_errors”, 0 );           
		?> 

		<?php
			require_once('conexao.php');

			$query_select_habitante="SELECT * FROM tb_habitante";
			$sql_select_habitante=mysql_query($query_select_habitante);
			if($sql_select_habitante == false)
				{
				echo "FALHA AO CONSULTAR A TABELA";
				exit;
				}
		?>
	</head>

	<body>		
		<br />
		<div class="container">
			<div class="row justify-content-center">
				<div class="col">
					<div class="listarbig">
						<div class="d-grid gap-2">
							<button class="btn btn-primary" type="button" onclick="window.location='inserir_habitante.php'"><strong>Adicionar Habitante</strong></button>							
						</div>
						<table class="table table-dark table-hover">
						<tr>		
						<th id="celula1">Nome:</th>
						<th id="celula1">Função:</th>
						<th id="celula1">Contato:</th>
						<th id="celula1">Celular:</th>  
						<th id="celula1"colspan="2">Ações</th>					 
						</tr>
						<?php  
						if(mysql_num_rows($sql_select_habitante) > 0)
						{
						   while($array_select_habitante=mysql_fetch_array($sql_select_habitante))
							{
								$id_habitante=$array_select_habitante["id_habitante"];
								//$nome=utf8_encode($array_select_contatos["nome"]);
								//$sobrenome=utf8_encode($array_select_contatos["sobrenome"]);
								$nome=$array_select_habitante["nome"];
								$funcao=$array_select_habitante["funcao"];
								$contato=$array_select_habitante["contato"];
								$celular=$array_select_habitante["celular"];
								;		

						 echo
						 " <tr>
							<td>$nome</td>
							<td>$funcao</td>
							<td>$contato</td>
							<td>$celular</td>    
							<td><a href=\"editar_habitante.php?id_habitante=$id_habitante\">Editar</a></td>
							<td><a href=\"deletar_habitante.php?id_habitante=$id_habitante\">Deletar</a></td>
						  </tr>
						  ";
							}
						}
						?>
						

						</table>
					</div>
				</div>
			</div>
		</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
		
	</body>
</html>
