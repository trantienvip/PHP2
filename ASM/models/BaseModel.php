<?php

class BaseModel{
    public function connectDB(){
        $conn = new PDO('mysql:host=localhost;dbname=assignment1_php2;charset=utf8', 'root', '');
        return $conn;
    }

    static function getAll(){
        $models = new static();
        $query = "SELECT * FROM ". $models->table;
        $conn = $models->connectDB();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, get_class($models));
    }
    
    static function find($id){
        $models = new static();
        $query = "SELECT * FROM ". $models->table . " WHERE id = $id";
        $conn = $models->connectDB();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_CLASS,get_class($models));
        if(count($data) > 0){
            return $data[0];
        }
        return null;
    }

    static function QueryTT($sql){
        $models = new static();
        $conn = $models->connectDB();
        $stmt = $conn->prepare($sql);
        $stmt ->execute();
    }
}
