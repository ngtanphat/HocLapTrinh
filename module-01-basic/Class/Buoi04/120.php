<?php
    $arrInt = [9,3,4,2];
    $min = $arrInt[0];
    $max = $arrInt[0];
    $sum = 0;
    $count = 0;
    foreach($arrInt as $value){
        if($min > $value){
            $min = $value;
        }
        
        if($max < $value){
            $max = $value;
        }
    }
    foreach($arrInt as $value){
        if($value != $min && $value != $max) {
            $sum += $value;
            $count++;
        }
    }
    $sum /= $count;
    echo $sum;