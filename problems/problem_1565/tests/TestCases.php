<?php

use PHPUnit\Framework\TestCase;
use Spatie\Ray\Ray;

require_once __DIR__ . '/../OrderedStream.php'; // Adjust the path as needed

class TestCases extends TestCase {
    public function testOrderedStream() {
        $os = new OrderedStream(5);

        // Helper function to print current state of stream and pointer
        $printState = function ($os, $message) {
            ray($message)->orange();
            ray("Current stream: ", $os->getStream())->orange();
            ray("Current pointer: ", $os->getPtr())->orange();
        };

        // Get initial state
        $printState($os, "Initial state");

        // Example 1
        $result = $os->insert(3, "ccccc");
        ray("Insert (3, 'ccccc')", $result)->green(); // Expected: []
        $printState($os, "After insert (3, 'ccccc')");

        $result = $os->insert(1, "aaaaa");
        ray("Insert (1, 'aaaaa')", $result)->green(); // Expected: ["aaaaa"]
        $printState($os, "After insert (1, 'aaaaa')");

        $result = $os->insert(2, "bbbbb");
        ray("Insert (2, 'bbbbb')", $result)->green(); // Expected: ["bbbbb", "ccccc"]
        $printState($os, "After insert (2, 'bbbbb')");

        $result = $os->insert(5, "eeeee");
        ray("Insert (5, 'eeeee')", $result)->green(); // Expected: []
        $printState($os, "After insert (5, 'eeeee')");

        $result = $os->insert(4, "ddddd");
        ray("Insert (4, 'ddddd')", $result)->green(); // Expected: ["ddddd", "eeeee"]
        $printState($os, "After insert (4, 'ddddd')");
    }
}
