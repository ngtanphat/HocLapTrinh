<?php
$totalSale = 1800;
$hoahong = 0;
$percent = 20;
if ($totalSale <= 100) {
    $percent = 5;
} elseif ($totalSale <= 300) {
    $percent = 10;
}

$hoahong = $totalSale * $percent / 100;
echo 'hoa hong:' . $hoahong;
