@@ -0,0 +1,42 @@
<?php

class Solution {
    /**
     * @param String[] $words
     * @return String[]
     */
    public function commonChars($words) {
        ray('Starting commonChars with input:', $words); // Debug start
        if (empty($words))
            return [];
        $minFreq = array_fill(0,26,PHP_INT_MAX);
        $result = [];
        foreach ($words as $word){
            $charCounts = array_fill(0,26,0);
            foreach (str_split($word) as $char){
                $charCounts[ord($char) - ord('a')]++;
                ray("character : " . $char);
            }

            for ($i = 0; $i < 26; $i++){
                ray("min frequence at i = $i " , $minFreq[$i] , "char counts at i = $i " , $charCounts[$i]);
                ray("character is : " ,chr($i + ord('a')) );
                $minFreq[$i] = min($minFreq[$i],$charCounts[$i]);
                ray("minFreq = " ,$minFreq);
            }
        }
        ray("charcount chars", $charCounts);

        for ($i = 0; $i < 26; $i++){
            if ($minFreq[$i] > 0){
                $result = array_merge($result,array_fill(0,$minFreq[$i],chr($i + ord('a'))));
            }
        }



        ray('Final commonChars :', $result); // Debug final length

        return $result;
    }
}