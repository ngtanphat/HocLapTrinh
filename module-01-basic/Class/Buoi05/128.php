<?php
$input = "Hue/2,3,4#Linh/5,3#Duy/5,36";
// tach thong tin sinh vien: # -> 3 phan tu
// tach ten va nhom diem: /
// duyet mang nhom diem, tach ket hop tim so lon nhat o moi nhom -> 3 phan 4,5,36

$arrInfo = explode('#', $input);
$arrName = [];
$arrMaxScore = [];
foreach ($arrInfo as $info) {
    $tmp = explode('/', $info);
    $arrName[] = $tmp[0];
    $arrScore = explode(',', $tmp[1]);
    $arrMaxScore[] = max($arrScore);
}

$output = '';
foreach($arrName as $keyName => $valueName){
    $output .= "$valueName : {$arrMaxScore[$keyName]}".PHP_EOL;
    // foreach($arrMaxScore as $keyScore => $valueScore){
    //     if($keyName == $keyScore) $output .= "$valueName : $valueScore".PHP_EOL;
    // }
}

print_r($arrName);
print_r($arrMaxScore);
echo $output;


// $arr = [];
// $strArr = '';
// for ($i = 0; $i < strlen($input); $i++) {
//     if ($input[$i] == '#') {
//         $arr[] = $strArr;
//         $strArr = '';
//     } else {
//         $strArr .= $input[$i];
//     }
// }
// if ($strArr != '') {
//     $arr[] = $strArr;
// }
// $arrName = [];
// $arrNum = [];
// foreach ($arr as $key => $value) {
//     // tim vi tri xuat hien cua dau / -> php find position of character in string
//     // cat chuoi tu dau -> vi tri / -> php sub string by position
//     // cat chuoi vi tri / -> het chuoi
//     $arrNum[] = substr($value, strpos($value, '/') + 1);
//     $arrName[] = substr($value, 0, strpos($value, '/'));
// }
// $arrMaxScore = [];
// foreach ($arrNum as $value) {
//     $maxScore = 0;
//     $score = '';
//     for ($i = 0; $i < strlen($value); $i++) {
//         if ($value[$i] == ',') {
//             if ((int)$score > $maxScore) $maxScore = (int)$score;
//             $score = '';
//         } else {
//             $score .= $value[$i];
//         }
//     }
//     if ($score != '' && (int)$score > $maxScore) $maxScore = (int)$score;
//     $arrMaxScore[] = $maxScore;
// }
// $output = '';
// foreach($arrName as $keyName => $valueName){
//     foreach($arrMaxScore as $keyScore => $valueScore){
//         if($keyName == $keyScore) $output .= "$valueName : $valueScore".PHP_EOL;
//     }
// }

// print_r($arrName);
// print_r($arrMaxScore);
// echo $output;