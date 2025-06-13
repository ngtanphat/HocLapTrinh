<?php
$n = 5;
$sum = 0;
$output = "";
for ($i = 1; $i <= $n; $i++) {
    $item = 2 * $i - 1;
    $output .= $item;
    $sum += $item;
    if ($i < $n) {
        $output = $output . "+";
    }
}
echo $output . " = " . $sum;