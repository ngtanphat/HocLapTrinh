<?php
    $n = 2;
    $output = '';
    $total = 1;
    $luythua =2;
    for($i=1;$i<=$n;$i++){
        $output .= "$n^$luythua ";
        if($i < $n) $output .= '+ ';
        for($j = 1; $j <= $luythua; $j++){
            $total *= $i; 
        }
        $luythua += 2;
    }
    echo "$output = $total"
?>