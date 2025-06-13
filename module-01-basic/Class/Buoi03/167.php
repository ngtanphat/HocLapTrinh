<?php
$height = 4;
$string = '';
for ($i = 1; $i <= $height; $i++) {
    $string .= '=';
    if ($i == $height) {
        for ($j = 2; $j <= $i; $j++) {
            $string .= '=';
        }
    }
    $string .= PHP_EOL;
}
echo $string;
