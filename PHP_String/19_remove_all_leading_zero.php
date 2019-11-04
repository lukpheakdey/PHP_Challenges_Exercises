<?php
    /*
        19. Write a PHP script to remove all leading zeroes from a string. 
        Original String : '000547023.24'
        Expected Output : '547023.24'
    */

    $str = '000547023.24';
    echo ltrim($str, '0');
?>