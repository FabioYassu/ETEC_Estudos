
  <html>
     <head>
	 
	 </head>
	 
	 <body>
		<h1>Brincadeira do P I M !!!!!</h1>
		
	 
	 </body>
  
  </html>
 
 <?php
	 $verifica=0;
     for($n=1;$n<=40;$n++)
	 {
		
		for($pim=4;$pim<=40;$pim=$pim+4)
		{
			if ($n==$pim)
			{
				echo '<font color="Blue" size="4"><b>';
				echo  " PIM ";
				echo '</font></b>';
				$verifica=$pim;
				
			} 
				
			
			
			
		}
		 if ($n!=$verifica)
		 {
			
		 echo $n." ";}
		 
		 
	 }
	
	
	
  ?>