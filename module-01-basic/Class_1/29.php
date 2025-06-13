<?php
    $numberOne = 6;
    $numberTwo = 3;
    $math = "x";
    $total = 0;
    $output = "$numberOne $math $numberTwo = ";
    switch($math){
        case '+':
            $total = $numberOne + $numberTwo; break;
        case '-':
            $total = $numberOne - $numberTwo; break;
        case 'x':
            $total = $numberOne * $numberTwo; break;
        case '/':
            $total = $numberOne / $numberTwo; break;
        default:
            $output = "Không thực hiện được, phép tính không hợp lệ";
    }
    echo $output .= "$total";
?>