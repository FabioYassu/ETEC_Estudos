<?php
// DEFINE UMA DATA E HORA QUALQUER (Y-m-d H:i:s)
$data = '2016-05-30 19:30:00';

// NUMERO DE DIAS PARA SOMAR
$dias = 7;

// SOMA OS DIAS A DATA DEFINIDA
$somaData = date('d-m-Y H:i:s', strtotime("+{$dias} days", strtotime($data)));

// EXIBE A DATA SOMADA
echo "{$somaData}<br />";

// SUBTRAI OS DIAS A DATA DEFINIDA
$subtraiData = date('d-m-Y H:i:s', strtotime("-{$dias} days", strtotime($data)));

// EXIBE A DATA SUBTRAIDA
echo "{$subtraiData}<br /><br />";

// SOMA OS DIAS A DATA DE HOJE
$somaHoje = date('d-m-Y H:i:s', strtotime("+{$dias} days"));

// EXIBE A DATA SOMADA
echo "{$somaHoje}<br />";

// EXIBE A DATA SUBTRAIDA
$subtraiHoje = date('d-m-Y H:i:s', strtotime("-{$dias} days"));

// EXIBE A DATA SUBTRAIDA
echo "{$subtraiHoje}";
?>