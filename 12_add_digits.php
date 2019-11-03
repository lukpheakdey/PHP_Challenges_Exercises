<?php
/*
    12. Write a PHP program to add the digits of a positive integer repeatedly until the result has a single digit.
    Input : 48
    For example given number is 59, the result will be 5.
    Step 1: 5 + 9 = 14
    Step 1: 1 + 4 = 5
*/

    function add_digits($num)
    {
        //echo ($num -1)%9;
        if ( $num > 0)
        {
        return ($num - 1) % 9 + 1;
        }
        else
        {
            return 0;
        }
    }

    print_r(add_digits(48)."\n");
    print_r(add_digits(59)."\n");
?>

