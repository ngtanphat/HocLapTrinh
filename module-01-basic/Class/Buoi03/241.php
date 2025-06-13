<?php
$yournumber = 13225;
$result = 0;
$string = '';

while ($yournumber != 0) {
    $lastNumber = $yournumber % 10;
    if($lastNumber % 2 == 0) {
        $result += $lastNumber;
        $string = "+ $lastNumber $string";
    }
    $yournumber = (int)($yournumber / 10);
}
$string = trim($string, "+ ");
if($result != 0) echo "$string = $result";
else echo "KHong co";
