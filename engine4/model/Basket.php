<?php

namespace app\model;


class Basket extends DbModel
{
    public $id;
    public $session_id;
    public $product_id;
    public $quantity;

    public function getBasket($session_id) {

    }

    public static function getTableName() {
        return 'basket';
    }

}