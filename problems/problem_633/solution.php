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
        for($a = 0; $a * $a<=$c; $a++){
            $bsquared = $c - $a * $a;
            $b = sqrt($bsquared);
            if($b == (int)$b){
                return true;
            }
        }

        ray('Final answer:', $count); // Debug final count

        return false;
    }
}

