<?php

class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    public function longestPalindrome($s) {
        ray('Starting longestPalindrome with input:', $s); // Debug start
        $length = 0;
        $oddFound = false;
        $countChars = array_fill(0,120,0);

        for ($i = 0; $i< strlen($s); $i++){
           $countChars[ord($s[$i])]++; //adding +1 to chaarcter but as asc range
        }

        ray("char counts based on a asc number index is : " , $countChars );

        for($i = 0; $i < 128; $i++){
            if ($countChars[$i]%2 == 0){
                $length+=$countChars[$i];
            }else{
             $oddFound = true;
             $length+=$countChars[$i] - 1;
            }
        }

        if ($oddFound)
            $length++;

        ray('Final palindrome length:', $length); // Debug final length

        return $length;
    }
}
