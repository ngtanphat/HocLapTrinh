<?php
    $x=4;
    $y=6;
    $z=9;
    $message ='FALSE';
    if ($x + $y > $z && $x +$z > $y && $y + $z > $x){
        $message = 'TRUE';
    } 
    echo $message;