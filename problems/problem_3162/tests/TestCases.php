<?php

use PHPUnit\Framework\TestCase;
use Spatie\Ray\Ray;

require_once __DIR__ . '/../Solution.php'; // Adjust the path as needed

class TestCases extends TestCase {
    public function testLongestPalindrome() {
        $solution = new Solution();
       \ray()->clearAll(); // Clear previous Ray output

        // Example 1
        $nums1 =  [1,3,4];
        $nums2 =  [1,3,4];
        $k = 1;
        $result = $solution->numberOfPairs($nums1 , $nums2 , $k );
        $expected = 5;
        if ($result === $expected) {
            ray("Test case 1 - Input: " . json_encode($nums1) . " and " . json_encode($nums2) , "\n k = $k" ,  " \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 1 - Input: " . json_encode($nums1) . " and " . json_encode($nums2) , "\n k = $k" ,  " \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }

        // Example 2
        $nums1 =  [1,2,4,12];
        $nums2 = [2,4];
        $k = 3;
        $result = $solution->numberOfPairs($nums1 , $nums2 , $k );
        $expected = 2;
        if ($result === $expected) {
            ray("Test case 1 - Input: " . json_encode($nums1) . " and " . json_encode($nums2) , "\n k = $k" ,  " \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 1 - Input: " . json_encode($nums1) . " and " . json_encode($nums2) , "\n k = $k" ,  " \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }

    }
}
