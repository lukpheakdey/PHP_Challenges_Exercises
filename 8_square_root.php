<?php

    /*
        8. Write a PHP program to compute and return the square root of a given number.
        Input : 16
    */
    
    function my_sqrt($n)
    {
        $x = $n;
        $y = 1;
        while($x > $y)
        {
            $x = ($x + $y)/2;
            $y = $n/$x;
        }
        return $x;
    }
    print_r(my_sqrt(16)."\n");
    print_r(my_sqrt(14)."\n");
?>