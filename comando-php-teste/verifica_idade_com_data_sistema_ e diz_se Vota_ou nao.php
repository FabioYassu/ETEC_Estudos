
   <html>
     <head>
	 
	 </head>
	 
	 <body>
		<h1>Verificando se você pode votar !!!!</h1>
		<form action="" method="post">
		    <input type="text"   placeholder="Nome completo" name="nome"  required="required">
			<input type="number"   placeholder="Ano de nascimento"name="ano" required="required">
			<input type="submit" name="bt_submit">
		</form>
	 
	 </body>
  
  </html>
  <?php
	if(isset($_POST["bt_submit"]))
	{
	$nome=$_POST["nome"];
	$ano=$_POST["ano"];
	//$data_atual= date('d/m/y');
    $ano_atual = date	('Y');
	
	echo "Ano atual:".$ano_atual."<br>";
	//echo $data_atual; 
	$ano_nascimento=$ano_atual-$ano;
	Echo $nome." você  tem ".$ano_nascimento." anos de idade,  ";
	
       if($ano_nascimento>=70)
	  {
		 echo " pode votar, entretanto o voto é facultativo depois dos 70 anos"; 
	  }
	  else   if($ano_nascimento<16)
	   {
		 echo "  não pode votar com essa idade "; 
	  }
	   else  if ($ano_nascimento>=18)
	{
		
		echo "então você vota , pois é obrigatório o voto com essa idade!!!!";
	} else  if ($ano_nascimento>=16)
	{
		
		echo "vota , mas é opcional o voto !!!!";
	}
	  /* else
		   {
		      echo "  pode votar com essa idade !!!!"; 
	     }*/
	}
	?>