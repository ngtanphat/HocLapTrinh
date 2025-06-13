<?php
$arrInt = [1,2,7,9,2];
$string = 'ton tai';
$string1 = 'khong ton tai';
$result = $string1;
if(count($arrInt) == 2){
    $result = $string1;
}
else{
    for ($i = 1; $i < count($arrInt) - 2; $i++) {
        if ($arrInt[$i-1] + $arrInt[$i+1] == $arrInt[$i]) {
            $result = $string;
            break;
        }
    }
}

echo $result;
