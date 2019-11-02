<?php
    /*
        2. Write a PHP programm to check if a give positive integer is a power of three
        Input: 9
        Output: 9 is power of 3
    */

    function power_of_three($input)
    {
        $x = $input;
        while($x % 3 == 0){
            $x = $x/3;
        }
        if($x == 1){
            echo "$input is power of three\n";
        } else {
            echo "$input is not power of three\n";
        }
    }

    power_of_three(9);
    power_of_three(27);
    power_of_three(4);

?>