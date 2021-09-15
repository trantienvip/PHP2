<?php
    class Users{
        // var $table = 'users';
        function __construct(){
            $this->conn = new PDO("mysql:host=localhost;dbname=b1_php2", 'root', '');
        }

        function getUserList(){
            $stmt = $this->conn->prepare("SELECT * FROM $this->table");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        function addUsers($name,$email){
            $stmt = $this->conn->prepare("INSERT INTO $this->table VALUES(NULL,'$name','$email')");
            $stmt->execute();
        }

        function deleteUsers($id){
            $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE id = $id");
            $stmt->execute();
        }

        function updateNameUsers($id, $name){
            $stmt = $this->conn->prepare("UPDATE $this->table SET name = '$name' WHERE id = $id");
            $stmt->execute();
        }
    }
?>