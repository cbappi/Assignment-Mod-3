<?php

function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $characterso = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characterst = '0123456789';
    $charactersf = '!@#$%^&*()_+';
  
    $password1 = '';
    $password2 = '';
    $password3 = '';
    $password4 = '';
 
    for ($i = 1; $i <$length-8; $i++) {
     
        $password1 .= $characters[rand(0, strlen($characters)  -1)];
        $password2 .= $characterso[rand(0, strlen($characterso)  -1)];
        $password3 .= $characterst[rand(0, strlen($characterst)  -1)];
        $password4 .= $charactersf[rand(0, strlen($charactersf)  -1)];
        
    }
    
    echo $password1.$password2.$password3.$password4;
}

generatePassword(12);
