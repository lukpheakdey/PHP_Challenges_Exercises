<?php
    /*
        5. Write a PHP script to extract the file name from the following string. 
        Sample String : 'www.example.com/public_html/index.php'
        Expected Output : 'index.php'og.'
        Check whether the said string contains the string 'jumps'
    */
    $path = 'www.example.com/public_html/index.php';

    $file_name = substr(strrchr($path, "/"), 1);
    echo $file_name;
?>