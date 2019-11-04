<?php
    /*
        8. Write a PHP script to format values in currency style. 
        Sample values : value1 = 65.45, value2 = 104.35
        Expected Result : 169.80
    */

    $val1 = 65.45;
    $val2 = 104.35;
    echo sprintf("%1.2f", $val1+$val2);

?>