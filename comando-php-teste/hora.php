<?php
 $dataFuturo = "2020-09-15 17:30:30";
 $dataAtual = "1991-12-24 15:18:45";

 $date_time  = new DateTime($dataAtual);
 $diff       = $date_time->diff( new DateTime($dataFuturo));
 echo $diff->format('%y ano(s), %m mês(s), %d dia(s), %H hora(s), %i minuto(s) e %s segundo(s)');
?>