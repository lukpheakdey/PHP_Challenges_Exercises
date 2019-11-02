<?php
    /*
        4. Write a PHP program to check if an integer is the power of another integer.
        Input : 16, 2
        Example: For x = 16 and y = 2 the answer is "true", and for x = 12 and y = 2 "false"
    */

    function power_of_other($a, $b)
    {
        $x = $a;
        $y = $b;
        while($x % $y == 0){
            $x = $x/$y;
        }
        if($x == 1){
            echo "$a is power of $b \n";
        } else {
            echo "$a is not power of $b \n";
        }
    }

    power_of_other(16, 2);
    power_of_other(12, 2);
    power_of_other(81, 3);

?>