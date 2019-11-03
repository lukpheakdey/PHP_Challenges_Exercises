<?php
    /*
        19. Write a PHP program to check whether a given number is an ugly number.
        Input : 12
        Ugly numbers are positive numbers whose only prime factors are 2, 3 or 5. 
        The sequence 1, 2, 3, 4, 5, 6, 8, 9, 10, 12, ...
        shows the first 10 ugly numbers.
        Note: 1 is typically treated as an ugly number
    */

    function is_ugly($num)
    {
        $z = $num;
        if ($num == 0)
        {
                return "$num is not an Ugly number";
        }
        
        $x = array(2, 3, 5);
        foreach ($x as $i)
        {
                while ($num % $i == 0)
                {
                    $num /= $i;
                    }
            }         
        if ($num==1)
            {
                return "$z is an Ugly number";
            }
            else
            {
                return "$z is not an Ugly number";
            }

    }    

    print(is_ugly(12)."\n");
    print(is_ugly(7)."\n");
?>
