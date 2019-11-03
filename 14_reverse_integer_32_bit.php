<?php

    /*
        14. Write a PHP program to reverse the bits of an integer (32 bits unsigned).
        Input : 1234
        For example, 1234 represented in binary as 10011010010 and returns 1260388352 which represents in binary as 1001011001000000000000000000000.
    */
    
    function reverse_integer($n)
    {
        $result = 0;
        for($i= 0; $i<32; $i++)
            {
                $result <<= 1;
                $result|= ($n & 1);
                $n >>= 1;
            }
        return $result;
    }   
    print_r(reverse_integer(1234)."\n");
?>
