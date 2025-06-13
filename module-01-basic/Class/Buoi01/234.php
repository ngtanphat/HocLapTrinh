<?php
$yourNumber = 103;
$message = "";
if ($yourNumber > 0) {
    $message = 'So nguyen duong';
} elseif ($yourNumber == 0) {
    $message = 'So 0';
} else {
    $message = 'So am';
}

echo $message;
