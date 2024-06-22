<?php

use PHPUnit\Framework\TestCase;
use Spatie\Ray\Ray;

require_once __DIR__ . '/../Solution.php'; // Adjust the path as needed

class TestCases extends TestCase {
    public function test() {
        $solution = new Solution();
        \ray()->clearAll(); // Clear previous Ray output

        // Example 1
        $nums = [0,1,4,6,7,10];
        $diff = 3;
        $expected = 2;

        $result = $solution->arithmeticTriplets($nums, $diff);


        if ($result === $expected) {
            ray("Test case 1 - Input: " . json_encode($nums) . " and " . $diff . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 1 - Input: " . json_encode($nums) . " and " . $diff . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }

        // Example 2
        $nums = [4,5,6,7,8,9];
        $diff = 2;
        $expected = 2;

        $result = $solution->arithmeticTriplets($nums, $diff);

        if ($result === $expected) {
            ray("Test case 2 - Input: " . json_encode($nums) . " and " . $diff . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 2 - Input: " . json_encode($nums) . " and " . $diff . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }
    }
}
