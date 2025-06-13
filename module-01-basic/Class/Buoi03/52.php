<?php
// 162
// 2 -> 1 -> 16
// 6 -> 2 -> 1
// 1 -> 3 -> 0 -> stop
$yournumber = 123;
$count = 0;
// echo $yournumber % 10;

while($yournumber != 0 ){
    $yournumber = (int)($yournumber / 10);
    $count++;
}
echo $count;