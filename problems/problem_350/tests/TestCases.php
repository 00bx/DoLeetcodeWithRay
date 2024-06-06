<?php

use PHPUnit\Framework\TestCase;
use Spatie\Ray\Ray;

require_once __DIR__ . '/../Solution.php'; // Adjust the path as needed

class TestCases extends TestCase {
    public function test() {
        $solution = new Solution();
        \ray()->clearAll(); // Clear previous Ray output

        // Example 1
        $input1 = [1,2,2,1];
        $input2 = [2,2];
        $expected = [2,2];
        $result = $solution->intersect($input1 , $input2 );
        if ($result === $expected) {
            ray("Test case 1 - Input: " . json_encode($input1) . " and " . json_encode($input2) .  ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 1 - Input: " . json_encode($input1) . " and " . json_encode($input2) .  ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }

        // Example 2
        $input1 = [4,9,5];
        $input2 =  [9,4,9,8,4];
        $expected = [4,9];
        $result = $solution->intersect($input1 , $input2 );
        if ($result === $expected) {
            ray("Test case 1 - Input: " . json_encode($input1) . " and " . json_encode($input2) .  ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 1 - Input: " . json_encode($input1) . " and " . json_encode($input2) .  ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }

    }
}
