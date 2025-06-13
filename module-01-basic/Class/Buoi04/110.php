<?php
$arrInt = [1];
$string1 = 'doi xung';
$string2 = 'khong doi xung';
$result = $string1;
//foreach ($arrInt as $value){
if (count($arrInt) == 1) {
    $result = $string1;
} else {
    for ($i = 0; $i < count($arrInt) / 2; $i++) {
        if ($arrInt[$i] != $arrInt[count($arrInt) - $i - 1]) {
            $result = $string2;
            break;
        }
    }
}
echo $result;
