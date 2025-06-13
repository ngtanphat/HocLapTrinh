<?php
$yourNumber = -1;
$message = '';
$str1 = "duong";
$str2 = "chan";

if ($yourNumber < 0) $str1 = "am";
if ($yourNumber % 2 != 0) $str2 = "le";

// if ($yourNumber >= 0 && $yourNumber % 2 != 0) {
//     $message = 'nguyen duong le';
// } elseif ($yourNumber >= 0 && $yourNumber % 2 == 0) {
//     $message = 'nguyen duong chan';
// } elseif ($yourNumber < 0 && $yourNumber % 2 != 0) {
//     $message = 'nguyen am le';
// } else {
//     $message = 'nguyen am chan';
// }
echo "Nguyen " . $str1 . " " . $str2;
// echo "Nguyen $str1 $str2";
// echo "Nguyen {$str1} {$str2}";
