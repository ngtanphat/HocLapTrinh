<?php
    $totalLine = 8;
    $timeDoing = 4;
    $salary = $timeDoing * 20;
    if($totalLine < 10){
        $salary -= 1;
    }elseif($totalLine >= 10 && $totalLine == 20){
        $salary -= 2;
    }elseif($totalLine > 20){
        $salary -= 5;
    } 
    echo "Salary : $salary$"
?>