<?php
$numberStart = 1;
$numberEnd = 10;
$check = false;
$result = '';

if ($numberStart % 2 == 0) $numberStart++;

for ($i = $numberStart + 1; $i < $numberEnd; $i = $i + 2) {
    $result .= $i . ' ';
}

if ($result == '') $result = 'khong co';
echo $result;
