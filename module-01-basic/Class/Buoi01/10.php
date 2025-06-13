<?php
// $n =2;
// for($i=1;$i>=$n;$i++){
//     $total = 0;
//     $total = $i + $n;
// }
// echo $i;
// $i =1;
// while($i <= $n){
//     $total = $i + ($n -1) + $n;
//     $i++;
// }
$n = 5;
$sum = 0;
$output = "";
for ($i = 1; $i <= $n; $i++) {
    $output = $output . $i;
    $sum = $sum + $i;
    if ($i < $n) {
        $output = $output . "+";
    }
}
echo $output . " = " . $sum;
