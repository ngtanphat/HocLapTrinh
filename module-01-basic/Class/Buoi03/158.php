<?php
$height = 3;
$string = '';

for ($i = 1; $i <= $height; $i++) {
    for ($j = 1; $j <= $height; $j++) {
        if ($i == $height || $j == 1 || $j == $height) {
            $string .= '=';
        } else {
            $string .= ' ';
        }
    }
    $string .= PHP_EOL;
}

echo $string;
