<?php
// n =3 -> ===
//         ===
//         ===
$n = 5;
$string = '';
for ($i = 1; $i <= $n; $i++) {
    $string .= '';
    for ($j = 1; $j <= $n; $j++) {
        $string .= '=';
    }
    $string .= PHP_EOL;
}
echo $string;
