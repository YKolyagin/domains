<?php

namespace app\model;


class Basket extends Model
{
    public $id;
    public $item = [];

    public function getTableName() {
        return 'basket';
    }
}