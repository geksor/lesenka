<?php

namespace app\models;

use yii\db\ActiveRecord;


class Cart extends ActiveRecord
{
    public static function getSumCount(){
        $sum = '';
        $qty = '';
        foreach ($_SESSION['cart'] as $id => $item){
            $item['prod_sum'] = $item['price'] * $item['qty'];
            $sum += $item['prod_sum'];
            $qty += $item['qty'];
            $_SESSION['cart'][$id]['prod_sum'] = $item['prod_sum'];
        }
        $_SESSION['cart.sum'] = $sum;
        $_SESSION['cart.qty'] = $qty;
    }
    public function addToCart($product, $qty = 1){
        if(isset($_SESSION['cart'][$product['id']])){
            $_SESSION['cart'][$product['id']]['qty'] += $qty;
        }else{
            $_SESSION['cart'][$product['id']] = [
                'qty' => $qty,
                'name' => $product['name'],
                'price' => $product['price'],
                'img' => $product['image'],
                'unit' => $product['unit']['item_code'],
                'prod_sum' => $product['price'] * $qty
            ];
        }
        self::getSumCount();
        return $_SESSION['cart.qty'];
    }
}