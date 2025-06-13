<?php
$n = 2;
$n1 = $n * 10 + $n;
$n2 = $n * 100 + $n1;

$n1 = $n * 11;
$n2 = $n * 111;
$total = $n + $n1 + $n2;
echo $n . ' + ' . $n1 . ' + ' . $n2 . ' = ' . $total;
