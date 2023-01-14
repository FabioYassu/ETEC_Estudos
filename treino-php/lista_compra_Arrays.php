<!DOCTYPE html>
 
<html lang="pt-br"> 
<head>
 <title>Lista de Horti Fruti</title>
  <meta charset="utf-8">
	<font size="8" face="Time New Roman" color="#00008B">Lista de Horti Fruti</font>
	</head>
	<body>
		       
	<br><br>
	Qual seu nome:
	<br>
	 <form action ="" method="post"> 
	<!--input type="text" name="nome" placeholder="Digite seu nome" required ="required" /> <!-- NOME -->
	<br><br>
	
	Escolha forma de apresentação numerica da Lista 
	
	<ol>
    <li> Lista alfabética </li>
    <li> Lista romana </li>
    <li> Lista numérica </li>
    </ol>
	 
	 
		 
		 <input type="number" name="list" placeholder="Digite um número"  /> <!-- TIPO LISTA  -->
		 <input type="number" name="qtde" placeholder="Digite um número"  /><!-- QUANTIDADE FRUTAS  -->
		 
		 
         <button type="submit" name="enviar">Criar Lista</button>
	

     
   
      <?php
	  	 

      if(isset($_POST["enviar"]))
	 {
            $list = $_POST["list"];
			$qtde = $_POST["qtde"];
			//$fruta = $_POST["fruta"];
					
									
			echo "<br>Seja Bem-Vindo <br> Esta é sua lista de compra:"; 
			 
			
		{
		
        switch($list)
        {
              case 1: echo "<ol type='A'>";
              $lista = "OK";
              break;
              case 2: echo "<ol type='I'>";
              $lista = "OK";
              break;
              case 3: echo "<ol type='1'>";
              $lista = "OK";
              break;
			  default: 
			  echo "Opção inválida";
			  break;
        }
        if($lista == "OK")
		{
		echo ('Digite as frutas:<br>');
		for($i = 1; $i <= $qtde; $i++)
			{
		echo('<input type="text" name="frutas" placeholder="Digite um número"  /><br>');
		
			}	
		echo('<button type="submit" name="enviar2">Criar Lista</button><br>');
		}
		}
	 }
	$frutas2 = array($_POST["frutas"]);
	 //$frutas2 = [$_POST["frutas"]]
	 if(isset($_POST["enviar2"]))
	 {
		print_r($frutas2);		
	//	echo ('<br>@'.$frutas2[1].'<br>');
	 }
				
      ?>
	  <script>
	  function arr()
	  {
		   return frutas;
		  
	  }
	  console.log (arr().frutas);
	  
	  </script>
	  
		</form>
	</body>
</html>