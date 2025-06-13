<?php
// Dữ liệu đầu vào
      //          1         2
      //0123456789012345678901234567
$str = "php/12/java/140/frontend/30";
$delimiter = '/';
$strtemp = '';
$arr =[];
for($i = 0 ; $i < strlen($str); $i++){
    if($str[$i] === $delimiter){
        $arr[] = $strtemp;
        $strtemp = '';
        
    }
    else {
        $strtemp .= $str[$i];
    }
}

if ($strtemp != '') {
    $arr[] = $strtemp;
}
print_r($arr);

/*
$i      $str[$i]        $strtemp        $arr
0       p               p
1       h               ph
2       p               php
3       /               ''              [php]
......
24      /               ''              [php, 12, java, 140, frontend]
25      3               3
26      0               30
27      /               ''              [php, ...., 30]

*/
?>
