<?php

 $start  = new \DateTime( '1991-12-24 21:00:00' );
    $end    = new \DateTime( '2020-09-15 11:39:37' );

    $interval = $start->diff( $end );

    echo implode(",", [
        $interval->d . " dias ",
        $interval->m . " meses ",
        $interval->y . " anos ",
        $interval->h . " horas ",
        $interval->i . " minutos ",
        $interval->s . " segundos ",
    ]);

    echo "Diferença em Horas é : " . ($interval->h + ($interval->days * 24));


?>