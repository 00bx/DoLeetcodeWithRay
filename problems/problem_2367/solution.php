php
<?php


class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $diff
     * @return Integer
     */
    public function arithmeticTriplets($nums, $diff) {

        $count = 0;
        $numsCount = count($nums);
        ray('Starting with input:', $nums, 'and diff:', $diff); // Debug start

        for ($i = 0; $i < $numsCount; $i++) {
            for ($j = $i + 1; $j < $numsCount; $j++) {
                if ($nums[$j] - $nums[$i] == $diff) {
                    for ($k = $j + 1; $k < $numsCount; $k++) {
                        if ($nums[$k] - $nums[$j] == $diff) {
                            $count++;
                            ray('Found triplet:', [$nums[$i], $nums[$j], $nums[$k]]); // Debug found triplet
                            break; // Since nums is strictly increasing, no need to check further for this j
                        }
                    }
                }
            }
        }

        ray('Final answer:', $count); // Debug final count

        return $count;
    }
}

