<?php
$totalLine = 8;
$timeDoing = 4;
$salary = 0;
$salaryInOneHour = 20;
$feeCheck = 0;
if ($totalLine < 10) {
    $feeCheck = 1;
} elseif ($totalLine <= 20) {
    $feeCheck = 2;
} else {
    $feeCheck = 5;
}
$salary = $salaryInOneHour * $timeDoing - $feeCheck;
echo 'Salay : ' . $salary;
