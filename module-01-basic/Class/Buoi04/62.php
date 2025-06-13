<?php
$str = "77ure";
$outPut = false;
// echo strlen($str);
for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] >= '0' && $str[$i] <= '9') {
        $outPut = true;
        break; 
    }
}

if ($outPut) {
    echo "true"; 
} else {
    echo "false"; 
}
?>
