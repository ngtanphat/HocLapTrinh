<?php
$x= 4;
$y= 6;
$z= 9;
$output = 'true';
if($x + $y < $z || $x + $z < $y || $y + $z < $x){
    $output = 'false';
}
echo $output;
?>