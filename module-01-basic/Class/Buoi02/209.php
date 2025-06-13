<?php
$n = 3;
$result = 0;
$string = '';
for ($i = 1; $i <= $n; $i++) {
    $luythua = 1;
    for ($x = 1; $x <= $i; $x++) {
        $luythua = $luythua * $i;
    }

    $string .= "$i^$i";
    if ($i < $n) $string .= " + ";
    $result = $result + $luythua;
}
echo $string . " = $result";
// $totalSum = 0;
// for ($i = 1; $i <= $n; $i++) {
//     $start = 1; // Bắt đầu với giá trị 1
//     for ($j = 1; $j <= 2 * $i; $j++) {
//         $start *= $n; // Tính lũy thừa bằng cách nhân liên tiếp
//     }
//     $totalSum += $start;
// }
/* dung ham pow
     $totalSum = 0;
     for ($i = 1; $i <= $n; $i++) {
         $totalSum += pow($n, 2 * $i);
     }
     */
//echo $string ." = $totalSum";
















// 2 -> 2 * 2
// 3 -> 3 * 3 * 3
// 4 -> 4 * 4 * 4 * 4