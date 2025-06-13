<?php
$number = 25;
$boiso = 0;
$string = '';
$i = 0;
for ($i = 0; $i < 100; $i += $number) {
    $string .= " $i";
}
echo "boi nho hon 100 cua $number la: " . $string;
// do {
//     $boiso = $number * $i;
//     $string .= "$boiso ";
//     $i++;
// } while ($number * $i < 100);
// echo "boi so cua $number la $string ";
