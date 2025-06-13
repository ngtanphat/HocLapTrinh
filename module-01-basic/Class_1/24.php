<?php
    $n = 7;
    $output = '';
    $total = 0;
    for($i=1; $i <= $n ; $i++){
        $total += $i*$i;
        $output .= "$i^2 ";
        if($i < $n ) $output .= '+ ';
    }
    echo "$output = $total";
?>