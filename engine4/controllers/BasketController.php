<?php

namespace app\controllers;

use app\model\Basket;
use app\model\Products;

class BasketController extends Controller
{
    public function actionBasket() {
        $sesId = "lk8cp65p4bm31dahlvqndusbvkfa1jnk";
        $products = Basket::getWere("session_id", $sesId);
        echo $this->render('basket', ['products' => $this->getProductBasket($products->product_id),
            'quantity' => $products->quantity]);
    }

    public static function getTableName() {
        return 'basket';
    }

    public function getProductBasket($id){
        return Products::getOne($id);
    }
}