<?php
$id = "89";
$str = " !@ 89*&( a )(*70 b &*65 a $#12b 89 .*%^)a79";
$arr = [];
$current = "";
$count = 0;

for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];

    if ($char >= '0' && $char <= '9') {
        $current .= $char;
    } elseif ($char === 'a' || $char === 'b' || $i === strlen($str) - 1) {
        
        if ($current !== "") {
            $arr[] = (int)$current;
            $current = ""; 
        }
    }
}

if ($current !== "") {
    $arr[] = (int)$current;
}

foreach($arr as $value){
    if($value == $id) $count++;
}

echo "Số id $id xuất hiện $count lần";
?>
