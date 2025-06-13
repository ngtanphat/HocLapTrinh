<?php
/*
Cho trước n là số tự nhiên lớn hơn 1. 
Bạn hãy viết chương trình để in ra tổng của dãy số từ 1 đến n đã cho, dãy số có dạng:
F(n) = 1 + 3 + 5 + ... + (2*n - 1)
*/
$n =4;
$output = '';
$total = 0;
$a=1;
for($i=1;$i<=$n;$i++){
    $output .= $a;
    $total +=$a; 
    $a+=2;
    if($i<$n) $output .= '+';
}
echo "$output = $total";
?>