<?php
$str = "D:/Data/Doing/psd/hailan.doc";
$output = '';
$output1 = '';
$output2 = '';
// $isDoneExtension = false;
// $isStartGetName = false;
// for($i = strlen($str) - 1; $i >= 0; $i--){
//     if($str[$i] == '/') break;

//     if ($isStartGetName) $output1 = $str[$i] . $output1;

//     if($str[$i] == '.') {
//         $isDoneExtension = true;
//         $isStartGetName = true;
//     }

//     if (!$isDoneExtension) $output2 = $str[$i] . $output2;
// }
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    if ($str[$i] == '/') break;
    $output = $str[$i] . $output;
}
// for ($j = 0; $j < strlen($output); $j++) {
//     if ($output[$j] == '.') break;
//     $output1 .= $output[$j];
// }
// for ($k = strlen($output) - 1; $k >= 0; $k--) {
//     if ($output[$k] == '.') break;
//     $output2 = $output[$k] . $output2;
// }
$outputArr = explode(".", $output);
print_r($outputArr);
// echo $output . PHP_EOL;
echo " Name : " . $outputArr[0] . PHP_EOL;
echo " Extension : " . $outputArr[1];
