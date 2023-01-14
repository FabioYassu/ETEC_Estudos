<!DOCTYPE html>
<html lang= "pt-br">
	<head>
	
	 <title>Lista de Horti Fruti</title>
	  <meta charset="utf-8">
		<style>
			.borda {
				margin: auto auto;
				padding:10px;
				width:300px;
				height:auto;
				
				border: 1px solid;
				
			}
		 </style>
	</head>
	<body>
		<div class='borda'>
	<h2> <font color="blue"> Lista de Horti Fruti</h2></font>
     
     <form action ="" method="post" id="formSubmit">
			Digite seu nome:<br>
        <input type="text" name="nome" >
		   <br>
			Escolha formato de contagem da lista:
			<ol>
			 <li>[1] Lista alfabética </li>
			 <li>[2] Lista romana </li>
			 <li>[3] Lista numérica </li>
			</ol>
        <input type="number" name="valor" placeholder="Digite o número da lista" style:="background: white;">
			<br><br>
		    Quantas  Produtos Deseja Cadastrar?
			<br><br>		   
        <input type="number" name="qtde_frutas" id="qtde_frutas2" placeholder="Digite o n° de produtos" required="required" style="background: white;">
			<br><br>
			Adicione aqui o produto
			<br>	
			<font color="gray"> Digite os Produtos separados por virgula <br> aperte ENTER e depois VERIFICAR</font>
			<br>

		   
    <input type="text" name="frutas[]" id="frutas2" placeholder="Digite o nome da(s) fruta(s)"  style="background: white;">
	<br>
			<input type="hidden" id="totalFrutas" name="totalFrutas">
           <input type="submit" name="bt_submit" value="Verificar">
     </form>
    
     
     
      <?php
if(isset($_POST['nome']))
		{
           echo " Bem vindo ".$_POST['nome'].". Esta é sua lista de compra:";
		}
    
	  
	  
      if(isset($_POST['totalFrutas'])){
            $totalFrutas = explode(',', $_POST['totalFrutas']);
            $valor = $_POST['valor'];
        switch($valor)
        {
            case 1: echo "<ol type='A'>";
            break;
            case 2: echo "<ol type='I'>";
            break;
            case 3: echo "<ol type='1'>";
            break;
            default: echo "Opção inválida";
        }
        foreach( $totalFrutas as $fruta ){
            echo "<li>".$fruta."</li>";  
        }
        echo "</ol>";

      }
      ?>


			<script>

			window.onload = function()
			{
				var qtde = document.getElementById('qtde_frutas2');
				var inputFrutas = document.getElementById('frutas2');
				var totalFrutas = document.getElementById('totalFrutas');
				let frutas = [];
				 inputFrutas.onkeypress = function(event)
				 {
					   if (event.keyCode == 13)
					   {
							event.preventDefault();
							frutas.push(inputFrutas.value);
							inputFrutas.value = "";
							qtde.value = qtde.value - 1;
							totalFrutas.value = frutas;
					   }
				 }
				 
			}
			</script>
		</div>
	</body>
</html>