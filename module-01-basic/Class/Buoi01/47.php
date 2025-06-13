<?php
$yourAge = 14;
$filmName = "Thế giới lập trình";
$message = "Bạn KHÔNG được xem phim";

if ($yourAge >= 15) {
    $message = "Bạn được xem phim";
}

echo $message . " " . $filmName;

// if ($yourAge >= 1 && $yourAge < 15) {
//     echo 'Bạn KHÔNG được xem phim ' . $filmName;
// } else {
//     echo 'Bạn được xem phim ' . $filmName;
// }
