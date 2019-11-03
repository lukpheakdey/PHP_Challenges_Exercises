<?php
    /*
        7. Write a PHP program to find three numbers from an array such that the sum of three consecutive numbers equal to a given number.
        Input : (array(2, 7, 7, 1, 8, 2, 7, 8, 7), 16))
    */

    function three_sum($arr, $target)
    {
        $count = count($arr)-2;
        $result = [];
        for($x=0; $x<$count; $x++) {
            if($arr[$x] + $arr[$x+1] + $arr[$x+2] == $target) {
                array_push($result, "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]} = $target ");
            }
        }
        return $result;
    }

    $my_array = array(2, 7, 7, 1, 8, 2, 7, 8, 7);
    print_r(three_Sum($my_array, 16));
    print_r(three_Sum($my_array, 11));
    print_r(three_Sum($my_array, 12));

?>