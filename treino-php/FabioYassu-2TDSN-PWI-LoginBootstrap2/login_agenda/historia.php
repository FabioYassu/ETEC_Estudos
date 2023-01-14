<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title> - - </title>
		<style>
	body{	
		background-color: #A3D7E5 ;		
		}
		</style>
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark justify-content-between">
			<a class="navbar-brand" href="privado.php">Home</a>
			<ul class="navbar-nav">
				<li class="nav-item">
				<a class="nav-link" href="sobre.php">Sobre </a>
				</li>
			</ul>
			<ul  class="navbar-nav">
				<li class="nav-item">
				<a class="nav-link" href="historia.php">História</a>
				</li>
			</ul>
			<ul  class="navbar-nav">
				<li class="nav-item">
				<a class="nav-link" href="agenda\index.php">Agenda</a>
				</li> 
			</ul>					
			<ul  class="navbar-nav ">
				<li class="nav-item">
				<a class="nav-link" href="logout.php">Logout</a>
				</li>  
			</ul>  
		</nav>
	</head>
	<body>
		<?php //session_start();?>		
		
		
		<?php 
			require('logado.php');
			echo "Olá, ".$_SESSION['usuario']['nome'];
		?> </br></br></br>
		
		Nossa história é .....
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	
	</body>
</html>