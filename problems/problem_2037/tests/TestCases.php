<?php

use PHPUnit\Framework\TestCase;
use Spatie\Ray\Ray;

require_once __DIR__ . '/../Solution.php'; // Adjust the path as needed

class TestCases extends TestCase {
    public function test() {
        $solution = new Solution();
        \ray()->clearAll(); // Clear previous Ray output

        // Example 1
        $seats =  [3,1,5];
       $students = [2,7,4];
        $expected = 4;
        $result = $solution->minMovesToSeat($seats , $students );
        if ($result === $expected) {
            ray("Test case 1 - Input: " . json_encode($seats) . " and " . json_encode($students) .  ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 1 - Input: " . json_encode($seats) . " and " . json_encode($students) .  ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }

        // Example 2
        $seats =[4,1,5,9];
        $students =[1,3,2,6];
        $expected =7;
        $result = $solution->minMovesToSeat($seats , $students );
        if ($result === $expected) {
            ray("Test case 1 - Input: " . json_encode($seats) . " and " . json_encode($students) .  ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 1 - Input: " . json_encode($seats) . " and " . json_encode($students) .  ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }


        // Example 3
        $seats =[2,2,6,6];
        $students =[1,3,2,6];
        $expected =4;
        $result = $solution->minMovesToSeat($seats , $students );
        if ($result === $expected) {
            ray("Test case 1 - Input: " . json_encode($seats) . " and " . json_encode($students) .  ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->green();
        } else {
            ray("Test case 1 - Input: " . json_encode($seats) . " and " . json_encode($students) .  ", \n Expected: " . json_encode($expected) . ", \n Got: " . json_encode($result))->red();
        }
    }
}
