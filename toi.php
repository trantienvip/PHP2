<?php
    class user{
        function __construct(){
            $this->connect=new PDO("mysql:host=localhost;dbname=b1_php2",'root','');
        }

        function get_user(){
            $smtp = $this->connect->query("SELECT * FROM users");
            $smtp->execute();
            return $smtp->fetchAll();
        }

        function update_user($id,$ten){
            $smtp = $this->connect->query("UPDATE users set name='$ten' WHERE id = $id");
            $smtp->execute();
        }

        function del_user($value){
            $smtp = $this->connect->query("DELETE FROM users WHERE name = '$value' OR id = '$value'");
            $smtp->execute();
        }
    }

    $thanhvien1 = new User();
    $result = $thanhvien1->get_user();
    $thanhvien1->update_user(1, 'Trần Tiến');
    $thanhvien1->del_user('xf');
    foreach($result as $row){
        echo $row['id'].$row['name']."<br>";
    }

    
?>