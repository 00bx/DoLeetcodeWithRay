<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @param Integer $k
     * @return Integer
     */
    function numberOfPairs($nums1, $nums2, $k) {
        ray('Starting  with input:', "nums1 : " , $nums1 , "nums2 : " , $nums2 , "k = $k " ); // Debug start
       $result = 0;
        // the answer is when u check whenever a number % of a number is == 0 it means its divisable
        // cus theres no reminder for it, like 10/5 = 2 so its divisable cus it doenst have any reminder 10%5 = 0

        for ($i  = 0; $i < count($nums1); $i++){
            for ($l = 0; $l < count($nums2); $l++ ){
                if($k*$nums2[$l]!=0 && $nums1[$i]%($k*$nums2[$l]) == 0){
                    $result++;
                }
                ray("is divisable : " . $nums1[$i]%($k*$nums2[$l]) == 0);
            }
        }
        ray("result is : " . $result);

        ray('Final result:', $result); // Debug final length

        return $result;
    }
}
