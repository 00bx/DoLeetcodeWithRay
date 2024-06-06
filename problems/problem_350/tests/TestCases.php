<?php

use PHPUnit\Framework\TestCase;
use Spatie\Ray\Ray;

require_once __DIR__ . '/../Solution.php'; // Adjust the path as needed

class TestCases extends TestCase {
    public function test() {
        $solution = new Solution();
        \ray()->clearAll(); // Clear previous Ray output

        // Example 1
        $input = ["bella", "label", "roller"];
        $expected = ["e", "l", "l"];
        $result = $solution->commonChars($input);
        if ($result === $expected) {
            ray("Test case 1 - Input: " . json_encode($input) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 1 - Input: " . json_encode($input) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }

        // Example 2
        $input = ["cool", "lock", "cook"];
        $expected = ["c", "o"];
        $result = $solution->commonChars($input);
        if ($result === $expected) {
            ray("Test case 2 - Input: " . json_encode($input) . ",\n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 2 - Input: " . json_encode($input) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }
    }
}
