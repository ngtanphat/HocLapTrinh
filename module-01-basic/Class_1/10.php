<?php
    $n =3;
    $total = 0;
    $output = '';
    for($i=1;$i<=$n;$i++){
        $total += $i;
        $output .= $i;
        if($i<$n) $output .= '+';
    }
    echo "$output = $total";
?>