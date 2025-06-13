<?php
$so = '';
$chu = '';
$dacBiet = '';
$str = "ab@#AB69C!}+21`";
for ($i = 0; $i < strlen($str); $i++) {
    if($str[$i] >= '0' && $str[$i] <= '9'){
        $so .= $str[$i];
    }
    elseif($str[$i] != '`' && $str[$i] >= 'A' && $str[$i] <= 'z'){
        $chu .= $str[$i];
    }
    else{
        $dacBiet .= $str[$i];
    }
}

echo $so.PHP_EOL;
echo $chu.PHP_EOL;
echo $dacBiet.PHP_EOL;