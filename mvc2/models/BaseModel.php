<?php

class BaseModel{
    function connectDB(){
        $connect= new PDO('mysql:host=localhost;dbname=we16201;charset=utf8', 'root', '');
        return $connect;
    }

    public static function getUserList(){
        $model= new static();
        $query= 'SELECT * FROM '. $model->table;
        $connect = $model->connectDB();
        $stmt = $connect->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
    }
}

?>