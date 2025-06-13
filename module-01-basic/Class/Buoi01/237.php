<?php
$yourNumber = 12;
$price = 0;
$km = 0;
if ($yourNumber <= 1) {
    $km = 15000;
} elseif ($yourNumber <= 5) {
    $km = 13500;
} else {
    $km = 11000;
}

$price = $km * $yourNumber;
$result = $km . ' x ' . $yourNumber;
if ($yourNumber > 120) {
    $price = $price * 90 / 100;
    $result .= " x 90%";
}
$result .= " = {$price}";
echo $result;
