<?php

$char='a';

switch ($char) {
    case 'a':
    case 'A':    
        echo 'Vowel : A';
        break;
    case 'e':
    case 'E':    
        echo 'Vowel : E';
        break; 
    case 'i':
    case 'I':
        echo 'Vowel : I';            
        break;
    case 'o':
    case 'O':    
        echo 'Vowel : O';
        break; 
    case 'u':
    case 'U':    
        echo 'Vowel : U';
        break;       
    default:
        echo 'Consonant.';
        break;
    }

?>