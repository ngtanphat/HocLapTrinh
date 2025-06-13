<?php
    $yourNumber = 12345678910;
    $even = 0;
    $odd  = 0;
    $stringEven = '';
    $stringOdd = '';
    while($yourNumber != 0){
        $lastNumber = $yourNumber % 10;
        if($lastNumber % 2 ==0){
            $even += $lastNumber;
            $stringEven = "$lastNumber + $stringEven";
        }
        else{
            $odd += $lastNumber;
            $stringOdd = "$lastNumber + $stringOdd";
        }
        $yourNumber = (int)($yourNumber / 10);
    }
    $stringEven = trim($stringEven, ' + ');
    $stringOdd = trim($stringOdd, ' + ');

    if (strlen($stringEven) != 1) $stringEven = "($stringEven)";
    if (strlen($stringOdd) != 1) $stringOdd = "($stringOdd)";
    $total = $odd - $even;
    echo "$stringOdd - $stringEven = $total";
    // 2%2 = 0;
?> 