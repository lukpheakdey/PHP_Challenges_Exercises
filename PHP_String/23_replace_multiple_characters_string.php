<?php
    /*
        23. Write a PHP script to replace multiple characters from the following string. 
        Sample String : '\"\1+2/3*2:2-3/4*3'
        Expected Output : '1 2 3 2 2 3 4 3'
    */

    $str = '\"\1+2/3*2:2-3/4*3';
    echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $str);
?>