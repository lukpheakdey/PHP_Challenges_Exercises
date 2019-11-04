<?php
    /*
        22. Write a PHP script to get the characters after the last '/' in an url. 
        Sample URL : 'http://www.example.com/5478631'
        Expected Output : '5478631'
    */

    $url = 'http://www.example.com/5478631';
    echo substr($url, strrpos($url, '/')+1);
?>