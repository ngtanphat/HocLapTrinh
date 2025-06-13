<?php
$n = 2;
$total = 0;
$string = '';
for ($i = 2; $i <= 2 * $n; $i += 2) {
    $string .= $i;
    $total += $i;
    if ($i < $n) $string .= ' + ';
}
echo "$string = $total";
