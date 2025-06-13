<?php
    $number =5;
    $total = 0;
    $output = '';
    for($i=1;$i<=10;$i++){
        $total = $i * $number;
        $output .= "$i x $number = $total"; 
        $output .= PHP_EOL;
    }
    echo $output;
?>