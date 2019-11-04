<?php
    /*
        21. Write a PHP program to check if a given string is an anagram of another given string.
        Input : ('anagram','nagaram')
        According to Wikipedia an anagram is direct word switch or word play, 
        the result of rearranging the letters of a word or phrase to produce a new word or phrase, 
        using all the original letters exactly once; for example, 
        the word anagram can be rearranged into nag-a-ram.
    */

    function is_anagram($a, $b)
    {
        if (count_chars($a, 1) == count_chars($b, 1))
        {
            return "This two strings are anagram";
        }
        else
        {
            return "This two strings are not anagram";
        }
    }
    print_r(is_anagram('anagram','nagaram')."\n");
    print_r(is_anagram('cat','rat')."\n");
?>
