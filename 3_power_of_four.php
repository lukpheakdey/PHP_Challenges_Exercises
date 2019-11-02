<?php
    /*
        2. Write a PHP programm to check if a give positive integer is a power of Four
        Input: 9
        Output: 9 is power of 3
    */

    function power_of_four($input)
    {
        $x = $input;
        while($x % 4 == 0){
            $x = $x/4;
        }
        if($x == 1){
            echo "$input is power of four\n";
        } else {
            echo "$input is not power of four\n";
        }
    }

    power_of_four(16);
    power_of_four(64);
    power_of_four(255);

?>