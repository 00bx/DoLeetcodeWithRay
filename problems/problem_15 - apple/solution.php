<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    public function threeSum($nums) {
        ray('Input array:', $nums); // Debug input
        sort($nums); // Sort the array
        ray('Sorted array:', $nums); // Debug sorted array

        $result = []; // Initialize result array

        for ($i = 0; $i < count($nums) - 2; $i++) {
            if ($i > 0 && $nums[$i] == $nums[$i - 1]) continue; // Skip duplicates

            $left = $i + 1; // Left pointer
            $right = count($nums) - 1; // Right pointer

            while ($left < $right) {
                $sum = $nums[$i] + $nums[$left] + $nums[$right];
                ray('Checking triplet:', $nums[$i], $nums[$left], $nums[$right], 'Sum:', $sum); // Debug triplet and sum

                if ($sum == 0) {
                    $result[] = [$nums[$i], $nums[$left], $nums[$right]]; // Add triplet
                    ray('Found triplet:', [$nums[$i], $nums[$left], $nums[$right]]); // Debug found triplet

                    while ($left < $right && $nums[$left] == $nums[$left + 1]) $left++; // Skip duplicates
                    while ($left < $right && $nums[$right] == $nums[$right - 1]) $right--; // Skip duplicates
                    $left++;
                    $right--;
                } elseif ($sum < 0) {
                    $left++; // Move left pointer right
                } else {
                    $right--; // Move right pointer left
                }
            }
        }

        ray('Final result:', $result); // Debug final result
        return $result;
    }
}
