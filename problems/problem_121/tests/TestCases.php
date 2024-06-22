<?php

use PHPUnit\Framework\TestCase;
use Spatie\Ray\Ray;

require_once __DIR__ . '/../Solution.php'; // Adjust the path as needed

class TestCases extends TestCase {
    public function test() {
        $solution = new Solution();
        \ray()->clearAll(); // Clear previous Ray output

        // Example 1
        $prices = [7,1,5,3,6,4];
        $expected = 5;
        $result = $solution->maxProfit($prices);
        if ($result === $expected) {
            ray("Test case 1 - Input: " . json_encode($prices) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 1 - Input: " . json_encode($prices) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }

        // Example 2
        $prices = [7,6,4,3,1];
        $expected = 0;
        $result = $solution->maxProfit($prices);
        if ($result === $expected) {
            ray("Test case 2 - Input: " . json_encode($prices) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 2 - Input: " . json_encode($prices) . ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }
    }
}

