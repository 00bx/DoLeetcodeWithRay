<?php
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */

    public function longestCommonPrefix($strs) {
        // Debug input
        ray('Input array:', $strs)->orange();

        if (empty($strs)) {
            ray('Array is empty, returning empty string.')->green();
            return "";
        }

        // Start with the first string in the array as the initial prefix
        $prefix = $strs[0];
        ray('Initial prefix set to:', $prefix)->orange();

        // Iterate through the remaining strings
        for ($i = 1; $i < count($strs); $i++) {
            ray('Checking string:', $strs[$i])->blue();

            // While the current string does not start with the prefix
            while (strpos($strs[$i], $prefix) !== 0) {
                ray('Current prefix "' . $prefix . '" not found at the start of "' . $strs[$i] . '"')->red();

                // Shorten the prefix by one character
                $prefix = substr($prefix, 0, strlen($prefix) - 1);
                ray('Prefix shortened to:', $prefix)->green();

                // If prefix becomes empty, return ""
                if ($prefix === "") {
                    ray('Prefix is empty, returning empty string.')->green();
                    return "";
                }
            }
            ray('Current prefix "' . $prefix . '" found at the start of "' . $strs[$i] . '"')->green();
        }

        ray('Final longest common prefix:', $prefix)->purple();
        return $prefix;

    }
}
