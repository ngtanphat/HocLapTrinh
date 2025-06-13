<?php
/*
Cho trước số nguyên yourNumber là số km của 1 xe taxi (grab) đi được. 
Bạn hãy viết chương trình để in ra số tiền cần trả dựa yourNumber đã cho, 
biết cách phân loại tiền theo số bậc như sau:
yourNumber  ≤ 1: giá 15000đ
1 < yourNumber  ≤ 5: giá 13500đ
yourNumber  > 5: giá 11000đ
yourNumber > 120 km sẽ được giảm 10% trên tổng số tiền.
*/
$yourNumber = 15;
$price = 11000;
$output = "$price x $yourNumber";
if ($yourNumber <= 1) {
    $price = 15000;
} elseif ($yourNumber > 1 && $yourNumber <= 5) {
    $price = 13500;
} elseif ($yourNumber > 120) {
    $price = 11000 * (90 / 100);
    $output .= ' x 90%';
}
$total = $price * $yourNumber;
echo "$output = $total";
