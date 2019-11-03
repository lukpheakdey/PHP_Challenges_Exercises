<?php
    /*
        6. Write a PHP program to find three numbers from an array such that the sum of three consecutive numbers equal to zero.
        Input : (-1,0,1,2,-1,-4)
    */

    function three_sum_zero($arr)
    {
        $count = count($arr)-2;
        $result = [];
        for($x=0; $x<$count; $x++) {
            if($arr[$x] + $arr[$x+1] + $arr[$x+2] == 0) {
                array_push($result, "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]} = 0 ");
            }
        }
        return $result;
    }

    $nums1= array(-1,0,1,2,-1,-4);
    $nums2 = array(-25,-10,-7,-3,2,4,8,10);

    print_r(three_Sum_zero($nums1));
    print_r(three_Sum_zero($nums2));

?>