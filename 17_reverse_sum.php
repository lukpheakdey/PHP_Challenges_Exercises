<?php

    /*
        17. Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form.
        Input : 13, 14
        Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted. ratio 3. 
        Similarly, 10, 5, 2.5, 1.25, ... is a geometric sequence with common ratio 1/2
    */
    
    function reverse_sum($n1, $n2)
    {
        return reverse_integer($n1) + reverse_integer($n2);
    }

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
    print_r(reverse_sum(13, 14)."\n");
    print_r(reverse_sum(130, 1)."\n");
    print_r(reverse_sum(305, 794)."\n");
?>
