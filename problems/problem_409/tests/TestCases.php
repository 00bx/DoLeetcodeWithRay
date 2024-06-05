<?php

use PHPUnit\Framework\TestCase;
use Spatie\Ray\Ray;

require_once __DIR__ . '/../Solution.php'; // Adjust the path as needed

class TestCases extends TestCase {
    public function testLongestPalindrome() {
        $solution = new Solution();
       \ray()->clearAll(); // Clear previous Ray output

        // Example 1
        $input = "abccccdd";
        $expected = 7;
        ray("Test case 1 - Input: $input, Expected: $expected, Got: {$solution->longestPalindrome($input)}");
        $this->assertEquals($expected, $solution->longestPalindrome($input));

        // Example 2
        $input = "a";
        $expected = 1;
        ray("Test case 2 - Input: $input, Expected: $expected, Got: {$solution->longestPalindrome($input)}");
        $this->assertEquals($expected, $solution->longestPalindrome($input));
    }
}
