<?php

# Gera os 6 n�meros
for ($i = 1; $i <= 6; $i++) { $n[] = str_pad(rand(1, 60), 2, '0', STR_PAD_LEFT); }

# Ordena os n�meros
sort($n);

# Exibe os n�meros
echo implode(' - ', $n);
	

?>