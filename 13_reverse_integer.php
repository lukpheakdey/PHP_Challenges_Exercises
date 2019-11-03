<?php

    /*
        13. Write a PHP program to reverse the digits of an integer.Go to the editor
        Sample :
        x = 234, return 432
        x = -234, return -432
    */
    
    function reverse_integer($n)
    {
        $reverse = 0;
        while ($n > 0)
        {
            $reverse = $reverse * 10;
            $reverse = $reverse + $n % 10;
            $n = (int)($n/10);
        }
        return $reverse;
    }   
    print_r(reverse_integer(1234)."\n");
    print_r(reverse_integer(23)."\n");
?>