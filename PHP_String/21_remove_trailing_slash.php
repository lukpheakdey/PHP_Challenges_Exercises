<?php
    /*
        21. Write a PHP script to remove trailing slash from a string. 
        Original String : 'The quick brown fox jumps over the lazy dog///'
        Expected Output : 'The quick brown fox jumps over the lazy dog'
    */

    $org_str = 'The quick brown fox jumps over the lazy dog///';
    echo rtrim($org_str, '/');
?>