<?php

class BaseModel {
    function getConnect(){
        $conn = new PDO("mysql:host=localhost;dbname=we16201;charset=utf8", 'root', '');
        return $conn;
    }

    static function getAll(){
        $models = new static();
        $queryBuilder = "SELECT * FROM ".$models->table;
        $conn = $models->getConnect();
        $stmt = $conn->prepare($queryBuilder);
        $stmt->execute();
        // return $stmt->fetchAll(PDO::FETCH_CLASS, static::class);
        return $stmt->fetchAll(PDO::FETCH_CLASS, get_class($models));
    }
}

?>