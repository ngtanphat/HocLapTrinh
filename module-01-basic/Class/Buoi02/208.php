<?php
$n = 4;
$sum = 0;
$output = "";
for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0) {
        $sum = $sum - $i;
        $output .= " - $i";
    } else {
        $sum = $sum + $i;
        if ($i == 1) $output .= " $i";
        else $output .= " + $i";
    }
}
echo $output . " = " . $sum;
