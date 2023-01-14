<?php
$t1 = strtotime("24-12-1991 23:00:00");
$t2 = strtotime("15-09-2020 23:00:00");
echo round(abs($t1 - $t2) / 60,2). " minutos ";
?>