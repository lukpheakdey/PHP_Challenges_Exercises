<?php
    /*
        5. Write a PHP program to find a missing number(s) from an array.
        Input : 1,2,3,6,7,8
    */

    function find_missing_number($arr)
    {
        $new_arr = range($arr[0], max($arr));
        return array_diff($new_arr, $arr);
    }

    print_r(find_missing_number(array(1,2,3,6,7,8)));

?>