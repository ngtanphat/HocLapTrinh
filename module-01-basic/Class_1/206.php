<?php
/*
Cho trước n là số tự nhiên lớn hơn 1. 
Bạn hãy viết chương trình để in ra tổng của dãy số từ 1 đến n đã cho, dãy số có dạng:
F(n) = 2 + 4 + 6 + ... + 2n
*/
$n =3;
$output = '';
$total = 0;
$a=2;
for($i=1;$i<=$n;$i++){
    $output .= $a;
    $total +=$a; 
    $a+=2;
    if($i<$n) $output .= '+';
}
echo "$output = $total";
?>