<?php
    /*
Cho trước n là số tự nhiên lớn hơn 1. 
Bạn hãy viết chương trình để in ra tổng của dãy số từ 1 đến n đã cho, dãy số có dạng:
F(n) = 1 - 2 + 3 + ... + (n-1) - n
    */
    $n =4;
    $output = '';
    $total = 0;
    for($i=1;$i<=$n;$i++){
        $output .= $i;
        if($i <$n && $i%2 == 0){
            $output .= ' + ';
            $total += $i;
        }
        elseif($i <$n && $i%2 != 0) {
            $output .= ' - ';
            $total -= $i;
        }
    }
    echo "$output = $total";
?>