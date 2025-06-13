<?php
    $yourNumber = -2;
    $output = 'so nguyen duong';
    if($yourNumber == 0){
        $output = 'so 0';
    }elseif($yourNumber < 0){
        $output = 'so nguyen am';
    }
    echo $output;
?>