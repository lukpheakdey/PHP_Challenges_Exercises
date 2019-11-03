<?php

    /*
        15. Write a PHP program to check a sequence of numbers is an arithmetic progression or not.
        Input : array(5, 7, 9, 11)
        In mathematics, an arithmetic progression or arithmetic sequence is a sequence of numbers such that the difference between the consecutive terms is constant.
        For example, the sequence 5, 7, 9, 11, 13, 15 ... is an arithmetic progression with common difference of 2.
    */
    
    function is_arithmetic($arr)
    {
        $delta = $arr[1] - $arr[0];
        for($i = 0; $i < sizeof($arr)-1; $i++){
            if(($arr[$i+1] - $arr[$i]) != $delta) {
                return "Not an arithmetic";
            }
        }
        return "An arithmetic";
    }   

    $my_arr1 = array(6, 7, 9, 11);
    $my_arr2 = array(5, 7, 9, 11);

    print_r(is_arithmetic($my_arr1)."\n");
    print_r(is_arithmetic($my_arr2)."\n");
?>
