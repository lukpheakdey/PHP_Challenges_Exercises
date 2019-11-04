<?php
    /*
        26. Write a PHP script to print letters from 'a' to 'z'.
        Expected Result : abcdefghijklmnopqrstuvwxyz
    */

   for($x = ord('a'); $x<= ord('z'); $x++)
   {
       echo chr($x);
   }
?>