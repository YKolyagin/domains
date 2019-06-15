<?php
namespace app\model;


class Category extends Model
{
    public $id;
    public $name_category;

    public function getCategory($id) {}

    public function getTableName() {
        return 'category';
    }
}