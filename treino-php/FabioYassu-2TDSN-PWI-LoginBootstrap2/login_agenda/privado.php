<?php //session_start();?> 	<!DOCTYPE html
%$u}ng="pt-br">
	<head>
	<meta charset="utf-8"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	
	<style>
	body{

	background-image: url("https://cdn.shopify.com/s/files/1/0017/7461/6627/products/into-wonderland-diamond-art-painting-22718829592769_2048x2048.jpg?v=1606076275");

		background-attachment: fixed ;
		background-size: 100% ;
		background-repeat: repeat ;	
		
		
		}
	p{
	text-align: center;
			text-shadow: 3px 3px 10px #afeeee, 0 0 25px #afeeee, 0 0 3px #afeeee;
			font-size: 30px;
			font-weight: 900;	
	}
	
    .flex{

        display: flex;
        flex-wrap: wrap;
        width: 100%;
        margin: 0 auto;
    }

		
	</style>		
		<title> Wonderland </title>
	</head>
	<body>
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
		<?php require('logado.php'); ?>
			<center>					
					<?php
						require('logado.php');
					//http://pngimg.com/uploads/welcome/welcome_PNG25.png	
					//https://i.pinimg.com/originals/23/e3/90/23e39086438360488a4e5b81a675a945.jpg
					echo "<font color='white' size='5' ><strong><br>Olá, ".$_SESSION['usuario']['nome']. "</font><strong>";
					?>	
			</center>
	
	
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-8">		
					<div class="">
						<div id="carouselWonder" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner center-block">
								<div class="carousel-item active">
								  <img src="https://pngimage.net/wp-content/uploads/2018/06/wonderland-png-5.png" class="d-block w-100 h-80" alt="...">
								</div>
								<div class="carousel-item">
								<br /><br /><br /><br />
								  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSeH-wygUMcH-eOF8Q7GSCbpv6mG4qMUiltPJoWsUGzqLEeWmg8sQMa2diPfia0jZzRw0&usqp=CAU" class="d-block w-100 h-80" alt="..." >
								</div>
								<div class="carousel-item">
								<br /><br />
								  <img src="https://scontent.fsod3-1.fna.fbcdn.net/v/t1.18169-9/550934_349720038456459_1936197941_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=d2e176&_nc_eui2=AeHbS7XNJnUcmQQJHmjx_F9Ir9lZoILcx_2v2VmggtzH_dpkl4ZWZU7_IMX41KTHRRWoiJjbM4K3IhnVUWOmcLIH&_nc_ohc=CVGurlTFTsEAX-DYzbs&_nc_oc=AQk_zQtOnccxPNzUUY3HUcIWjq_oUxTQZdigMZCHcZvzoelqGnj65PAj8t6E5qFsF0KZbSF7OUznSsdYr7ZcypXG&_nc_ht=scontent.fsod3-1.fna&oh=6434bb3b5fd1e7547db745dc50bbd5f3&oe=60E17C3A" class="d-block w-100 h-80" alt="...">
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselWonder" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselWonder" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>		
					</div>	
				</div>			
			</div>
		</div>
		
		
		
		
	

		
		
		
			
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	</body>
</html>