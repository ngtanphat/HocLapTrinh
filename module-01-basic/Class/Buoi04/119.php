<?php
    $score = [2, 5, 8, 10, 10];
    $student = ["Hang", "Dung", "Hien", "Dieu", "Lan"];
    $scoreMax=$score[0];
    $outPut = "HV co diem cao nhat - ";
    $outPut1 = '';
    $key = 10;
    foreach($score as $keyScore => $valueScore){
        if($valueScore > $scoreMax){
            $scoreMax = $valueScore;
        }
    }   
    foreach($student as $keyStudent => $valueStudent){
        if($scoreMax == $score[$keyStudent]){
            $outPut1 .= ", $valueStudent";
        }
    }
    //trim xoa dau va cuoi chuoi.
    $outPut1 = trim($outPut1,', ');
    $outPut .= "$outPut1 : $scoreMax";
    echo $outPut;