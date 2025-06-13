<?php
    $start = 1;
    $end   = 10;
    $output = '';
    for($i=1;$i<10;$i++){
        if($i %2 == 0){
            $output .= "$i ";
        }
    }
    echo $output;
?>  