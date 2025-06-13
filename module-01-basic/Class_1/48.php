<?php
    // a i e o u A I E O U
    $character = '1';
    $output = 'Nguyên âm';
    switch($character){
        case 'a': 
        case 'i':
        case 'e':
        case 'o':
        case 'u':
        case 'A':
        case 'I':
        case 'E':
        case 'O':
        case 'U':break;
        default: $output = 'không là Nguyên âm';
    }
    echo $output;
       
?>