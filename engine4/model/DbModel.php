<?php

namespace app\model;


use app\engine\Db;

abstract class DbModel extends Models
{

    public function getWere($name, $value) {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE {$name} = :ses";
        return Db::getInstance()->queryObject($sql, ['ses' => $value], static::class);
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
//INSERT INTO `products`(`name`, `description`, `price`) VALUES (:name, :description, :price)
    public function insert()
    {

        $params = [];
        $colums = [];

        foreach ($this as $key => $value) {
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
        $tableName = static::getTableName();
        $sql = "UPDATE {$tableName} SET ";
        // я хотел для форич добавить переменную и передать ее как :repl но у меня не получилось не понимаю почему?
/*
        $repl = "";
        $oldProduct = Products::getOne($this->id);
        foreach ($this as $key => $value) {
            static $i = 0;
            if ($value !== $oldProduct->$key && $i === 0) {
                $repl .= "{$key}='{$value}'";
                $i++;
            } elseif ($value !== $oldProduct->$key) {
                $repl .= ", {$key}='{$value}'";
                $i++;
            }
        }
        $sql .= " :repl WHERE {$tableName}.id = :id";
        return Db::getInstance()->execute($sql, ['id' => $this->id, 'repl' => $repl]);*/

        $oldProduct = Products::getOne($this->id);
        foreach ($this as $key => $value) {
            static $i = 0;
            if ($value !== $oldProduct->$key && $i === 0) {
                $sql .= "{$key}='{$value}'";
                $i++;
            } elseif ($value !== $oldProduct->$key) {
                $sql .= ", {$key}='{$value}'";
                $i++;
            }
        }
        $sql .= " WHERE {$tableName}.id = :id";
        return Db::getInstance()->execute($sql, ['id' => $this->id]);

    }

    public function delete() {
        $tableName = static::getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->execute($sql, ['id' => $this->id]);
    }

    public function save() {
        if (is_null($this->id))
            $this->insert();
        else
            $this->update();

    }

}