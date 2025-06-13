<?php
    $arrInt = [4,2,3,6];
    $sum = 0;
    $sum += $arrInt[0] + $arrInt[(count($arrInt) -1)];
    echo $sum;