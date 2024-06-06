<?php

class Solution {
    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    public function intersect($nums1, $nums2) {
        ray('Starting with input:', $nums1 , "and " , $nums2); // Debug start
        $result = [];
        $nums1Length = count($nums1);
        $nums2Length = count($nums2);
        $length = $nums1Length < $nums2Length ? $nums1Length : $nums2Length;
        if ($nums1Length == $length){
            for ($i = 0; $i<$length; $i++){
                for ($l = 0; $l<$nums2Length; $l++){
                    if ($nums1[$i] == $nums2[$l]){
                        $result [] = $nums1[$i];
                        unset($nums2[$l]);
                        $nums2 = array_values($nums2);
                        $nums2Length--;
                        break;
                    }

                }
            }
        }else{
            for ($i = 0; $i<$length; $i++){
                for ($l = 0; $l<$nums1Length; $l++){
                    if ($nums2[$i] == $nums1[$l]  ){
                        $result [] = $nums2[$i];
                        unset($nums1[$l]);
                        $nums1 = array_values($nums1);
                        $nums1Length--;
                        break;

                    }

                }
            }
        }


        ray('Final answer :', $result); // Debug final length

        return $result;
    }
}
