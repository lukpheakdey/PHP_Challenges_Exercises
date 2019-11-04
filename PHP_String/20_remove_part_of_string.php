<?php
    /*
        20. Write a PHP script to remove part of a string. 
        Original String : 'The quick brown fox jumps over the lazy dog'
        Remove 'fox' from the above string.
        Expected Output : 'The quick brown jumps over the lazy dog'
    */

    $org_str = 'The quick brown fox jumps over the lazy dog';
    $result = str_replace('fox',' ', $org_str);
    echo $result;
?>