<?php
    /*
        17. Write a PHP script to insert a string at the specified position in a given string.
        Original String : 'The brown fox'
        Insert 'quick' between 'The' and 'brown'.
        Expected Output : 'The quick brown fox'
    */

    $orgStr = 'The brown fox';
    $insertStr = 'quick';
    $result = substr_replace($orgStr, $insertStr.' ', 4, 0);
    echo $result;
?>