<?php
    $arrInt = [1,2,3,3];
    $yN = 2;
    $string1 = 'ton tai';
    $string2 = 'khong ton tai';
    $count = 0;
    foreach ($arrInt as $value){
        if($yN == $value) {
            $count++;
            break;
        }
    }
    if($count != 0) $result = $string1;
    else $result = $string2;
    echo $result;