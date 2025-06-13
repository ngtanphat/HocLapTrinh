<?php
    $yourNumber = -2;
    $chanle = 'chẳn';
    $duongam = 'dương';
    $output = 'Nguyên';
    if($yourNumber < 0){
        $duongam = 'âm';
    }
    if($yourNumber % 2 != 0){
        $chanle = 'lẻ';
    }
    echo $output .= " $duongam $chanle";;
?>