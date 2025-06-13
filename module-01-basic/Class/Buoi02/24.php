<?php
// n=3 -> 1*1 + 2*2 + 3*3*3 = 5
$n = 6;
$result = 0;
$string = '';
for ($i = 1; $i <= $n; $i++) {
    $result += $i * $i;
    $string .= $i . '^2 + ';
}
// echo $result;
echo $string . "= $result";
