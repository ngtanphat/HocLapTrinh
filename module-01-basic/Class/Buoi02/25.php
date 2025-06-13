<?php
$n = 4;
$total = 1;
$string = '';
for ($i = $n; $i >= 1; $i--) {
    $string .= $i;
    if ($i > 1) $string .= ' x ';
    $total *= $i;
}
echo "$string = $total";
