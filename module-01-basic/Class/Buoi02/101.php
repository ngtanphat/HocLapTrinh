<?php
$number = 24;
$result = 0;
$string = '';
for ($i = 1; $i <= $number; $i++) {
    if ($number % $i == 0) {
        $result  = $i;
        $string .= $result . ' ';
    }
}
echo "uoc so cua $number la $string";
