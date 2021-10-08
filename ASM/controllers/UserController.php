<?php
require_once('./models/Users.php');
class UserController{
    function edit(){
        if (isset($_POST['btnSubmit'])) {
            $id = $_POST['btnSubmit'];
            $ten = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $birth_date = $_POST['birth_date'];
            
            $tmp_name = $_FILES['upload']['tmp_name'];
            $name = $_FILES['upload']['name'];

            if (!empty($tmp_name) || !empty($name)) {
                $path = "./image"; // Ảnh sẽ lưu vào thư mục images
                move_uploaded_file($tmp_name, "./image/".$name); 
                $avatar = $path .'/'. $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu

                $sql = "UPDATE employees SET name = '$ten', email = '$email', avatar = '$avatar', address = '$address', birth_date = '$birth_date' WHERE id = $id";
            }else{
                $sql = "UPDATE employees SET name = '$ten', email = '$email', address = '$address', birth_date = '$birth_date' WHERE id = $id";
            }

            Users::QueryTT($sql);
            header('location: ./index.php?ctrl=HomeController&action=index');
        }else{
            $id = $_GET['id'];
            $users = Users::find($id);
            require_once('./views/edit.php');
        }
    }

    function addUsers(){
        if (isset($_POST['btnAddUser'])) {
            $ten = $_POST['name'];
            $email = $_POST['email'];
            $avatar = $_POST['avatar'];
            $address = $_POST['address'];
            $birth_date = $_POST['birth_date'];
            
            $tmp_name = $_FILES['upload']['tmp_name'];
            $name = $_FILES['upload']['name'];

            $path = "./image"; // Ảnh sẽ lưu vào thư mục images
            move_uploaded_file($tmp_name, "./image/".$name); 
            $avatar = $path .'/'. $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu


            $sql = "INSERT INTO employees VALUES(null, '$ten', '$email', '$avatar', '$birth_date', '$address')";
            Users::QueryTT($sql);
            header('location: ./index.php?ctrl=HomeController&action=index');
        }else{
            require_once('./views/addUser.php');
        }
    }

    function remove(){
        $id = $_GET['id'];
        $sql = "DELETE FROM employees WHERE id = $id";
        Users::QueryTT($sql);
        header('location: ./index.php?ctrl=HomeController&action=index');
    }
}
