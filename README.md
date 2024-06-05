<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeetCode Problems Setup in PHPStorm</title>
</head>
<body>

<h1>LeetCode Problems Setup in PHPStorm</h1>
<p>This guide will help you set up your PHPStorm environment to solve LeetCode problems using PHPUnit for testing and Ray for debugging.</p>

<h2>Prerequisites</h2>
<ol>
    <li>PHP installed via Homebrew on your machine.</li>
    <li>Composer installed on your machine.</li>
    <li>PHPStorm installed on your machine.</li>
    <li>Ray installed on your machine.</li>
</ol>

<h2>Step-by-Step Guide</h2>

<h3>1. Install PHPStorm</h3>
<ul>
    <li>Download and install PHPStorm from the <a href="https://www.jetbrains.com/phpstorm/download/#section=mac">PHPStorm website.</a></li>
</ul>

<h3>2. Install Composer</h3>
<ul>
    <li>Download and install Composer from the <a href="https://getcomposer.org">Composer website.</a></li>
</ul>

<h3>3. Install PHP via Homebrew</h3>
<ul>
    <li>Open your terminal.</li>
    <li>Install PHP via Homebrew:</li>
    <pre><code>brew install php</code></pre>
</ul>

<h3>4. Create a New PHP Project in PHPStorm</h3>
<ul>
    <li>Open PHPStorm and create a new project by selecting <code>File &gt; New Project</code>.</li>
    <li>Name your project <code>LeetCodeProblems</code> and choose a location for the project.</li>
</ul>

<h3>5. Set Up Project Structure</h3>
<ul>
    <li>Create the following directory structure within the project:</li>
    <pre><code>LeetCodeProblems/
├── problems/
│   ├── problem_409/
│   │   ├── Solution.php
│   │   └── tests/
│   │       └── TestCases.php
└── ...</code></pre>
</ul>

<h3>6. Install PHPUnit and Ray</h3>
<h4>Install PHPUnit</h4>
<ul>
    <li>Open your terminal and navigate to the root directory of your project.</li>
    <li>Run the following command to install PHPUnit:</li>
    <pre><code>composer require --dev phpunit/phpunit</code></pre>
</ul>

<h4>Install Ray</h4>
<ul>
    <li>Run the following command to install Ray via Composer:</li>
    <pre><code>composer require spatie/ray</code></pre>
</ul>

<h3>7. Create Configuration Files</h3>
<h4>Create <code>phpunit.xml</code></h4>
<ul>
    <li>In the root directory of your project, create a file named <code>phpunit.xml</code> with the following content:</li>
    <pre><code>&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;phpunit bootstrap="vendor/autoload.php" colors="true"&gt;
    &lt;testsuites&gt;
        &lt;testsuite name="Project Test Suite"&gt;
            &lt;directory&gt;./tests&lt;/directory&gt;
        &lt;/testsuite&gt;
    &lt;/testsuites&gt;
&lt;/phpunit&gt;</code></pre>
</ul>

<h4>Create <code>ray.php</code></h4>
<ul>
    <li>In the root directory of your project, create a file named <code>ray.php</code> with the following content:</li>
    <pre><code>&lt;?php

return [
'enable' => true,
'host' => 'localhost',
'port' => 23517,
];</code></pre>
</ul>

<h3>8. Write Your Solution and Test Cases</h3>
<h4>Solution.php</h4>
<ul>
    <li>Create <code>Solution.php</code> in <code>problems/problem_409/</code> with the following content:</li>
    <pre><code>&lt;?php

class Solution {
/**
* @param String $s
* @return Integer
*/
public function longestPalindrome($s) {
ray('Starting longestPalindrome with input:', $s); // Debug start

        $charCount = array_fill(0, 128, 0); // ASCII range for upper and lower case letters

        // Count the frequency of each character
        for ($i = 0; $i < strlen($s); $i++) {
            $charCount[ord($s[$i])]++;
        }

        ray('Character counts:', $charCount); // Debug character counts

        $length = 0;
        $oddFound = false;

        // Calculate the length of the longest palindrome
        for ($i = 0; $i < 128; $i++) {
            if ($charCount[$i] % 2 == 0) {
                $length += $charCount[$i];
            } else {
                $length += $charCount[$i] - 1;
                $oddFound = true;
            }
        }

        // If there was any odd count, we can add one center character
        if ($oddFound) {
            $length++;
        }

        ray('Final palindrome length:', $length); // Debug final length

        return $length;
    }
}</code></pre>
</ul>

<h4>TestCases.php</h4>
<ul>
    <li>Create <code>TestCases.php</code> in <code>problems/problem_409/tests/</code> with the following content:</li>
    <pre><code>&lt;?php

use PHPUnit\Framework\TestCase;
use Spatie\Ray\Ray;

require_once __DIR__ . '/../Solution.php'; // Adjust the path as needed

class TestCases extends TestCase {
public function testLongestPalindrome() {
$solution = new Solution();
ray()->clearAll(); // Clear previous Ray output

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
}</code></pre>
</ul>

<h3>9. Configure PHPStorm</h3>
<ul>
    <li>Configure PHPUnit in PHPStorm:
        <ul>
            <li>Go to <code>File &gt; Settings &gt; Languages & Frameworks &gt; PHP &gt; Test Frameworks</code>.</li>
            <li>Click <code>+</code> and select <code>PHPUnit by Composer autoload</code>.</li>
            <li>Set the path to the <code>phpunit</code> executable: <code>vendor/bin/phpunit</code>.</li>
        </ul>
    </li>
    <li>Configure Ray in PHPStorm:
        <ul>
            <li>Ensure Ray is properly configured in <code>ray.php</code> and that the Ray application is running on your computer.</li>
        </ul>
    </li>
</ul>

<h3>10. Run and Debug Your Tests</h3>
<ul>
    <li>Run Tests in PHPStorm:
        <ul>
            <li>Right-click on the <code>TestCases.php</code> file or the <code>tests</code> directory and select <code>Run 'PHPUnit tests in ...'</code>.</li>
        </ul>
    </li>
    <li>View Ray Output:
        <ul>
            <li>Open the Ray application to see the debug output from your tests.</li>
        </ul>
    </li>
    <li>Debug with Ray:
        <ul>
            <li>Use <code>ray()</code> calls within your code to send debug messages to Ray.</li>
        </ul>
    </li>
</ul>

<h3>Example Run</h3>
<ul>
    <li>Run the Tests:
        <ul>
            <li>Running the tests in PHPStorm will execute the test cases and output results in the test runner window.</li>
        </ul>
    </li>
    <li>View Debug Output in Ray:
        <ul>
            <li>The Ray application will display messages sent from your tests, helping you see what's happening internally.</li>
        </ul>
    </li>
</ul>
<p>&copy; 2024 Zemen (00bx). All rights reserved. 🌟 Keep pushing forward and happy coding! 🚀</p>


</body>
</html>
