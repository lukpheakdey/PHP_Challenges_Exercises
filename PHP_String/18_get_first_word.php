<?php
    /*
        18. Write a PHP script to get the first word of a sentence. 
        Original String : 'The quick brown fox'
        Expected Output : 'The'
    */

    $str = 'The quick brown fox';
    $result = explode(' ', trim($str));
    echo $result[0];
?>