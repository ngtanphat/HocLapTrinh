<?php
$n = 4;
$result = 0;
$string = '';
for ($i = 1; $i <= $n; $i++) {
    $luythua = 1;
    for ($j = 0; $j < 2 * $i; $j++) {
        $luythua *= $n;
    }
    $result += $luythua;
    $mu = $i * 2;
    $string .= "$n^$mu ";
    if($i<$n) $string .= '+ ';
}
echo "$string= $result";
