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
            $asc = ord($s[$i]);
           $countChars[$asc]++; //adding +1 to chaarcter but as asc range
            if($asc%2==0){
                $length+=2;
            }
        }

        ray("char counts based on a asc number index is : " , $countChars );


        if ($length < strlen($s))
            $length++;

        ray('Final palindrome length:', $length); // Debug final length

        return $length;
    }
}
