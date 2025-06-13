<?php
    $n = 3;
    $output = '';
    $total = 0;
    for($i=1;$i<=$n;$i++){
        $luythua= 1;
        for($j = 1 ; $j<=$i;$j++){
            $luythua *= $i;
        }
        $total += $luythua;
        $output .= "$i^$i ";
        if($i<$n) $output .= '+ ';
    }
    echo "$output = $total";
?>