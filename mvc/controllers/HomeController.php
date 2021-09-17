<?php
require('./models/User.php');
class HomeController {
    public function index() {
        $user = User::getAll();
        require('./views/home/index.php');
    }
}


?>