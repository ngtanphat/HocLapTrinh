<?php  
    $arrInt = [2,2,6,2,3];
    $max = $arrInt[0];
    $result = 0;
    foreach($arrInt as $key => $value){
        if($value >= $max){
            $max = $value;
            $result = $key;
        }
    }
    echo $result;