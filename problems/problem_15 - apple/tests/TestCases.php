<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Solution.php'; // Adjust the path as needed

class TestCases extends TestCase {
    public function testThreeSum() {
        $solution = new Solution();
        \ray()->clearAll(); // Clear previous Ray output

        // Test Case 1
        $input = [-1, 0, 1, 2, -1, -4];
        $expected = [[-1, -1, 2], [-1, 0, 1]];
        $result = $solution->threeSum($input);
        if ($result === $expected) {
            ray("Test case 1 - Input: " . json_encode($input) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 1 - Input: " . json_encode($input) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }

        // Test Case 2
        $input = [0, 1, 1];
        $expected = [];
        $result = $solution->threeSum($input);
        if ($result === $expected) {
            ray("Test case 2 - Input: " . json_encode($input) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 2 - Input: " . json_encode($input) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }

        // Test Case 3
        $input = [0, 0, 0];
        $expected = [[0, 0, 0]];
        $result = $solution->threeSum($input);
        if ($result === $expected) {
            ray("Test case 3 - Input: " . json_encode($input) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 3 - Input: " . json_encode($input) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }

        // Test Case 4
        $input = [-2, 0, 1, 1, 2];
        $expected = [[-2, 0, 2], [-2, 1, 1]];
        $result = $solution->threeSum($input);
        if ($result === $expected) {
            ray("Test case 4 - Input: " . json_encode($input) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 4 - Input: " . json_encode($input) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }

        // Test Case 5
        $input = [];
        $expected = [];
        $result = $solution->threeSum($input);
        if ($result === $expected) {
            ray("Test case 5 - Input: " . json_encode($input) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 5 - Input: " . json_encode($input) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }
    }
}
