<?php

namespace app\model;


class Order extends Model
{
    public $id;
    public $user;
    public $shipping;
    public $date;
    public $payment;
    public $item = [];

    public function getTableName() {
        return 'basket';
    }
}