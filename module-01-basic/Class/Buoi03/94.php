<?php
$yournumber = 123;
// echo (int)($yournumber / 10);
$result = 0;
$string = '';

while ($yournumber != 0) {
    $lastNumber = $yournumber % 10;
    $result += $lastNumber;
    // if ($lastNumber % 10 == 0) 
        $string = "+ $lastNumber $string";

    $yournumber = (int)($yournumber / 10);
}
//trim xoa dau va cuoi chuoi.
$string = trim($string, "+ ");
echo "$string = $result";
