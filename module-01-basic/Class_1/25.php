<?php
    $n =3;
    $total = 1;
    $output ='';
    for($i=$n;$i>=1;$i--){
        $output .= $i;
        if($i > 1) $output .= ' x ';
        $total *= $i;
    }
    echo "$output = $total";
?>