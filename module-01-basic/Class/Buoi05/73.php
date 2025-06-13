<?php
$id = 69;
$count = 0;
$str = " 69,  1,   69 , 169 ,69";
$arr = [];
$current = ""; 

for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];

    if ($char >= '0' && $char <= '9') {
        $current .= $char;
    } elseif ($char === ',' || $i === strlen($str) - 1) {
        
        if ($current !== "") {
            $arr[] = (int)$current;
            if($id === (int)$current) $count++;
            $current = ""; 
        }
    }
}

// explode -> array
// duyet array va dem

if($id === (int)$current) $count++;
// if ($current !== "") {
//     $arr[] = (int)$current;
// }
// foreach($arr as $value){
//     if((int)$id === $value) $count++;
// }
echo "$id xuất hiện $count lần";
?>