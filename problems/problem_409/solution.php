<?php

class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    public function longestPalindrome($s) {
        ray('Starting longestPalindrome with input:', $s); // Debug start

        $charCount = array_fill(0, 128, 0); // ASCII range for upper and lower case letters

        // Count the frequency of each character
        for ($i = 0; $i < strlen($s); $i++) {
            $charCount[ord($s[$i])]++;
        }

        ray('Character counts:', $charCount); // Debug character counts

        $length = 0;
        $oddFound = false;

        // Calculate the length of the longest palindrome
        for ($i = 0; $i < 128; $i++) {
            if ($charCount[$i] % 2 == 0) {
                $length += $charCount[$i];
            } else {
                $length += $charCount[$i] - 1;
                $oddFound = true;
            }
        }

        // If there was any odd count, we can add one center character
        if ($oddFound) {
            $length++;
        }

        ray('Final palindrome length:', $length); // Debug final length

        return $length;
    }
}
