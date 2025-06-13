<?php
    $number =42;
    $number /= 10;
    $outputArr = explode('.',$number);
    $lang = $outputArr[0];
    $day = $outputArr[1];
    $arrEN = ["", "", "Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
    $arrVI = ["", "", "Thứ hai","Thứ ba","Thứ tư","Thứ năm","Thứ sáu","Thứ bảy","Chủ nhật"];
    $string = '';
    if($outputArr[0] == 1){
        $string = $arrEN[$day];
    }
    if($outputArr[0] == 2){
        $string = $arrVI[$day];
    }
    if($string == ''){
        echo 'khong giai ma duoc';
    }
    echo $string;
?>