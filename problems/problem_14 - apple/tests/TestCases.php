<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Solution.php'; // Adjust the path as needed

class TestCases extends TestCase {
    public function testLongestCommonPrefix() {
        $solution = new Solution();
        \ray()->clearAll(); // Clear previous Ray output

        // Test Case 1
        $input = ["flower","flow","flight"];
        $expected = "fl";
        $result = $solution->longestCommonPrefix($input);
        if ($result === $expected) {
            ray("Test case 1 - Input: " . json_encode($input) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 1 - Input: " . json_encode($input) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }
        $this->assertEquals($expected, $result);

        // Test Case 2
        $input = ["dog","racecar","car"];
        $expected = "";
        $result = $solution->longestCommonPrefix($input);
        if ($result === $expected) {
            ray("Test case 2 - Input: " . json_encode($input) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 2 - Input: " . json_encode($input) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }
        $this->assertEquals($expected, $result);
    }
}
