<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.10.15
 * Time: 15:43
 */

namespace Shopping;

class ShoppingList {
    public static function getTotalCots(array $buyList)
    {
        $totalCost = 0;
        foreach ($buyList as $product) {
             $totalCost += (float) $product->getPrice();
        }

        return 'Total cost: '.$totalCost;
    }

    public static function getProductCostList(array $buyList)
    {
        $str = "<h1>Buy List</h1> <br>\n";
        foreach ($buyList as $product) {
            $str .= $product->getBrand() . " ";
            $str .= $product->getModel() . ".....";
            $str .= $product->getPrice() . "<br>\n";
        }

        return $str;
    }
}