<?php
$arrInt = [3,8,3];

$sumEven = 0;
$sumOdd = 0;
$sumAll = 0;

foreach ($arrInt as $num) {
    $sumAll += $num;
    if ($num % 2 == 0) {
        $sumEven += $num;
    } else {
        $sumOdd += $num;
    }
}

echo "sumEven = $sumEven\n";
echo "sumOdd = $sumOdd\n";
echo "sumAll = $sumAll\n";
?>
