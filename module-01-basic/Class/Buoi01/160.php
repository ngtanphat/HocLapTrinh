<?php
$x = 6;
$y = 4;
$z = 5;
$x2 = $x * $x;
$y2 = $y * $y;
$z2 = $z * $z;
$message = '';
// tam giac deu -> $x == $y && $x == $z
// tam giac can -> $x == $y || $x == $z || $y == $z
// tam giac vuong -> 1 || 2 || 3
// tam giac thuong
if ($x == $y && $x == $z) {
    $message = 'tam giac deu';
} elseif ($x == $y || $x == $z || $y == $z) {
    $message = 'tam giac can';
} elseif (($x2 == $y2 + $z2) || ($y2 == $x2 + $z2) || $z2 == $x2 + $y2) {
    $message = 'tam giac vuong';
} else {
    $message = 'tam giac thuong';
}
echo $message;
