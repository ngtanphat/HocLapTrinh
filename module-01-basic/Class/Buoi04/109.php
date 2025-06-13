<?php
    $arrInt=[-1,-4,-5,-2];
    $max = $arrInt[0];


    foreach ($arrInt as $value) {
        if($max < $value) $max = $value;
    }
    // for($i = 0; $i < count($arrInt); $i++){
    //     if($max < $arrInt[$i]) $max = $arrInt[$i];
    // }
    echo $max;