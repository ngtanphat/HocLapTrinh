<?php
//a, e, i, o, u, A, E, I, O, U.
    $character = '$';
    // chuyen sang chu thuong
    $message = '';
    switch ($character){
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
        case 'A':
        case 'E':
        case 'I':
        case 'O':
        case 'U':
            $message = 'Nguyen am';
            break;
        default :
            $message = 'khong la nguyen am';
    }
    echo $message;