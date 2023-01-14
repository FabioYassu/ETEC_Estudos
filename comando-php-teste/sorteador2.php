<?php

# Gera os 6 números
for ($i = 1; $i <= 6; $i++) { $n[] = str_pad(rand(1, 60), 2, '0', STR_PAD_LEFT); }

# Ordena os números
sort($n);

# Exibe os números
echo implode(' - ', $n);
	

?>