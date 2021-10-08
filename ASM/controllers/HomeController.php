<?php
require_once('./models/Users.php');
class HomeController{
    function index(){
        $users = Users::getAll();
        require_once('./views/index.php');
    }
}

?>