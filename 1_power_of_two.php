
<?php

    // 1. Write a PHP programm to check it a give postiove intergeris a power of two
    // Input: 4
    // Output: 4 is power of 2 

    function powerOfTwo($input)
    {
        if(($input & ($input -1)) == 0){
            echo $input. " is power of 2";
        } else {
            echo $input. " is not power of 2";
        }
    }
    powerOfTwo(4);

?>