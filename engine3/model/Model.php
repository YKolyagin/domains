<?php

namespace app\model;

use app\interfaces\IModel;
use app\engine\Db;


abstract class Model implements IModel
{
    protected $db;


    public function __construct()
    {
        $this->db = Db::getInstance();
    }

    public function getWere($name, $value) {

    }

    public function getOne($id) {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return $this->db->queryOne($sql, ['id' => $id]);
    }
    public function getAll() {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        // почему не видит queryAll?
        return $this->db->queryAll($sql);
    }

    public function insert() {
        $tableName = $this->getTableName();
        $sql = "INSERT INTO {$tableName} (";
        foreach ($this as $k=>$v) {
           if ($k !== "db" && $k !== "id") {
               $sql .= "{$k}, ";
           }
        }
        $sql = substr($sql, 0, -2);
        $sql .= ") VALUE (";
        foreach ($this as $k=>$v) {
            if ($k !== "db" && $k !== "id") {
                $sql .= "'{$v}', ";
            }
        }
        $sql = substr($sql, 0, -2);
        $sql .= ")";
        var_dump($sql);
        return $this->db->queryAll($sql);


        //execute
        //$this->id = "lastID";

    }

    public function update() {

    }

    public function delete() {

    }

}