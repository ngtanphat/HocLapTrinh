<?php
$sentence = "lap ztrnh php tai zendvn la chuong trinh la d";
$searchWord = "tri";

/*
explode $sentence -> $arrWord
loop $arrWord -> kiem tra $word có chua $searchWord hay khong (php check string contain string)
*/

$arrSearchWord = [];
for ($i = 0; $i < strlen($searchWord); $i++) {
    $arrSearchWord[] = $searchWord[$i];
}
$arrSentence = [];
$situation = -1;
$arrSentence = explode(' ',$sentence);
foreach($arrSentence as $key => $value){
    if( str_contains($value,$searchWord) == true){
        $situation = $key +1;
        break;
    }
}
echo $situation;



// print_r($arrSentence);

/*
$i      $arrSentence        $situation
0       l
1       la
2       lap
3                           2
4       t
5       tr
6       tri


*/
// print_r($arrSentence);
    // echo $situation;
    // echo $situation;

// $a =['t','r','i','a'];
// $b =['t','r','i'];
// if(count($a) > count($b)){
//     echo 'true';
// }else echo 'false';