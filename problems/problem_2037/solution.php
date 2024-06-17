<?php

class Solution {

    /**
     * @param Integer[] $seats
     * @param Integer[] $students
     * @return Integer
     */
    public function minMovesToSeat($seats, $students) {
        ray('Starting with input:', $seats , "and " , $students); // Debug start

        sort($seats);
        sort($students);
        $result = 0;
        for($i = 0; $i < count($students); $i++){
            $result+=abs($students[$i] - $seats[$i]);
        }
        ray('Final answer :', $result); // Debug final length

        return $result;
    }
}
