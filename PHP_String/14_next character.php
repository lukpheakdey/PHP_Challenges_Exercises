<?php
    /*
        14. Write a PHP script to print the next character of a specific character.
    Sample character : 'a'
    Expected Output : 'b'
    Sample character : 'z'
    Expected Output : 'a'
    */

    $cha = 'a';
    $next_cha = ++$cha;
    if(strlen($next_cha)>1){
        $next_cha = $next_cha[0];
    }
    echo $next_cha;
?>