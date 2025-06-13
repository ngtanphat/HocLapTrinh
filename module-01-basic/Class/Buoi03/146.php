<?php
$yournumber = 12;
$result = 0;
$string = '';
$min = $yournumber % 10;
$max = 0;

while ($yournumber != 0) {
    $lastNumber = $yournumber % 10;
    $yournumber = (int)($yournumber / 10);
    if ($lastNumber > $max) {
        $max = $lastNumber;
    }

    if ($lastNumber < $min) {
        $min = $lastNumber;
    }
    
}
echo "$max - $min = $result";
