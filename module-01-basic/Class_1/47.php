<?php
$yourage = 11;
$output = 'ban ko dc xem';
if ($yourage >= 15 && $yourage < 100) {
    $output = 'ban duoc xem';
}
echo $output;
