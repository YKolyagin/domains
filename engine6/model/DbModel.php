<?php

namespace app\model;


use app\engine\Db;

abstract class DbModel extends Models
{

    public static function getCountWhere($field, $value) {
        $tableName = static::getTableName();
        $sql = "SELECT count(*) as count FROM {$tableName} WHERE `$field`=:$field";
        return Db::getInstance()->queryOne($sql, ["$field"=>$value])['count'];
    }

    public static function getOneWhere($field, $value) {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE `$field`=:$field";
        return Db::getInstance()->queryObject($sql, ["$field"=>$value], static::class);
    }

    public static function getOne($id) {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->queryObject($sql, ['id' => $id], static::class);
    }
    public static function getAll() {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return Db::getInstance()->queryAll($sql);
    }

    public static function getLimit(int $from,int $limit) {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} LIMIT {$from}, {$limit}";
        return Db::getInstance()->queryAll($sql);
    }

//INSERT INTO `products`(`name`, `description`, `price`) VALUES (:name, :description, :price)
    public function insert() {

        $params = [];
        $colums = [];

        foreach($this as $key => $value) {
            if ($key == "id") continue;
            $params[":{$key}"] = $value;
            $colums[] = "`$key`";
        }
        $colums = implode(", ", $colums);
        $values = implode(", ", array_keys($params));

        $tableName = static::getTableName();

        $sql = "INSERT INTO {$tableName} ({$colums}) VALUES ({$values})";

      //  var_dump($sql, $params);


        Db::getInstance()->execute($sql, $params);

        $this->id = Db::getInstance()->lastInsertId();


    }
    //UPDATE `products` SET `id`=[value-1],`name`=[value-2],`description`=[value-3],`price`=[value-4] WHERE 1
    public function update() {

        $params = [];
        $colums = [];

        foreach($this as $key => $value) {
            $params[":{$key}"] = $value;
            $colums[] = "`$key`=:{$key}";
        }
        $colums = implode(", ", $colums);
        $tableName = static::getTableName();
        $sql = "UPDATE {$tableName} SET {$colums} WHERE id = :id";
        Db::getInstance()->execute($sql, $params);

    }

    public function delete() {
        $tableName = static::getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        var_dump($this->id);
        return Db::getInstance()->execute($sql, ['id' => $this->id]);
    }

    public function save() {
        if (is_null($this->id))
            $this->insert();
        else
            $this->update();

    }

}