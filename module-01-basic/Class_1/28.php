<?php
    $totalSale = 1800;
    $hoaHong = 0;
    if($totalSale <= 100){
        $hoaHong = $totalSale * 5 / 100;
    }elseif($totalSale <=300){
        $hoaHong = $totalSale * 10 / 100;
    }elseif($totalSale > 300){
        $hoaHong = $totalSale * 20 / 100;
    }
    echo $hoaHong;
?>