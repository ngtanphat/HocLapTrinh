<?php
    /* 
    Tam giác vuông X = 3 Y = 4 Z = 5
    Tam giác đều   X = 3 Y = 3 Z = 3
    Tam giác cân   X = 3 Y = 5 Z = 3
    Tam giác thường X = 6 Y = 4 Z = 5 */
    $x = 3;
    $y = 5; 
    $z = 3;
    $output = 'tam giác';
    if($x == $y && $x == $z ){
        $output .= ' đều';
    }elseif($x == $y || $x == $z || $y == $z){
        $output .= ' cân';
    }elseif($x*$x == $y + $z || $y*$y == $x + $z || $z*$z == $x + $y){
        $output .= ' vuông';
    }else $output .= ' nhọn';
    echo $output;
?>