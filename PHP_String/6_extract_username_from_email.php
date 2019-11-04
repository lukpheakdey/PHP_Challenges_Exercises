<?php
/*
    6. Write a PHP script to extract the user name from the following email ID. Go to the editor
    Sample String : 'rayy@example.com'
    Expected Output : 'rayy'
*/

    $mailid  = 'rayy@example.com';
    $user = strstr($mailid, '@', false);
    echo $user."\n";


?>