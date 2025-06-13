<?php
$numberOne = 6;
$numberTwo = 2;
$math = 's';
$string = '';
$error = '';
$result = 0;
switch ($math) {
    case '+':
        $result = $numberOne + $numberTwo;
        break;
    case '-':
        $result = $numberOne - $numberTwo;
        break;
    case '*':
        $result = $numberOne * $numberTwo;
        break;
    case '/':
        if ($numberTwo != 0) {
            $result = $numberOne / $numberTwo;
        } else {
            $error = 'Khong the chia cho 0';
        }
        break;
    default:
        $error = 'Khong thuc hien duoc, phep tinh khong hop le';
}

if ($error != '') {
    echo $error;
} else {
    $string = "$numberOne $math $numberTwo = $result";
    echo $string;
}