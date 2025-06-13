<?php
    $month = 11;
    $year = 2020;
    $date = '31 ngày';

    switch($month){
        case 1: break;
        case 3: break;
        case 5: break;
        case 7: break;
        case 8: break;
        case 10: break;
        case 12: break;
        default: $date = '30 ngày';
    }
    if($month == 2){
        if($year % 400 == 0 || $year % 4 == 0 && $year % 100 != 0){
            $date = '29 ngày';
        }else {
            $date = '28 ngày';
        }
    }
    echo "Tháng $month năm $year có $date";
?>