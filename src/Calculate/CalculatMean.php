<?php

namespace App\Calculate;

use App\Entity\RatingProduct;
use App\Repository\RatingProductRepository;

class CalculatMean
{
    public static function avgByProduct(array $comments): float
    {
        if(0 === count($comments)) {
            return 0;
        }

        $number = count($comments);
        $sum = array_sum(array_map(function (RatingProduct $product) {
            return $product->getRating();
        }, $comments));

        return round($sum/$number, 1);
    }
}
