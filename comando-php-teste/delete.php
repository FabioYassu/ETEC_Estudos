<?php
$datetime1 = date_create('1991-12-24 15:20:00');
$datetime2 = date_create('2020-09-15 15:45:02');
$interval = date_diff($datetime1, $datetime2);
echo $interval->format('%R%a days');
?>