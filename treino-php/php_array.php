<?php
// GERA O ARRAY DE 1 A 40
$arr = range(1,40);

// SUBSTITUI OS MULTIPLOS POR PIN NO ARRAY
for( $i=3 ; $i<=40 ; $i = $i + 4){
$arr[$i] = "PIN";
}
// MOSTRA OS NÚMEROS COM PIN
foreach( $arr AS $each )
{
echo $each, '<br />';
}
?>