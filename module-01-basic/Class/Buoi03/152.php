<?php
$height = 5;
$string = '';
for ($i = 1; $i <= $height; $i++) {
    //$string .= '=';
    $row = '';
    for ($j = 1; $j <= $height; $j++) {
        if ($i == 1 || $i == $height || $j == 1 || $j == $height) {
            $row .= '=';
        } else {
            $row .= " ";
        }
    }
    // if ($i == $height || $i == 1) {
    //     for ($j = 1; $j <= $height; $j++) {
    //         $row .= '=';
    //     }
    // } else {
    //     for ($k = 1; $k <= $height; $k++) {
    //         if ($k == 1 || $k == $height) {
    //             $row .= '=';
    //         } else {
    //             $row .= ' ';
    //         }
    //     }
    // }
    $string .= $row . PHP_EOL;
}
echo $string;

/*
        12345
       1=====
       2=   =
       3=   =
       4=   =
       5=====
*/
