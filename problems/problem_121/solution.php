<?php

class Solution {
    /**
     * @param Integer[] $prices
     * @return Integer
     */
    public function maxProfit($prices) {
        ray('Starting with input:', $prices); // Debug start

        $minPrice = $prices[0];
        $maxProfit = 0;

        foreach ($prices as $price) {
            ray("price is :  " , $price);
            if ($price < $minPrice) {
                $minPrice = $price;
                ray('Updated minPrice:', $minPrice); // Debug minPrice update
            } elseif ($price - $minPrice > $maxProfit) {
                $maxProfit = $price - $minPrice;
                ray('Updated maxProfit:', $maxProfit); // Debug maxProfit update
            }
        }

        ray('Final maxProfit:', $maxProfit); // Debug final result

        return $maxProfit;
    }
}