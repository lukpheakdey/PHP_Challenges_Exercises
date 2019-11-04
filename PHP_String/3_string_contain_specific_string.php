<?php
    /*
        3. Write a PHP script to check if a string contains a specific string? 
        Sample string : 'The quick brown fox jumps over the lazy dog.'
        Check whether the said string contains the string 'jumps'
    */
    $str1 = 'The quick brown fox jumps over the lazy dog.';
    if (strpos($str1,'jumps') !== false) 
    {
        echo 'The specific word is present.';
    }
    else
    {
        echo 'The specific word is not present.';
    }
?>