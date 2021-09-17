<?php
require_once ('./models/Product.php');
class HomeController{
    public function user(){
        $users = User::getUserList();
        require_once ('./views/user/index.php');
    }
    public function product(){
        $products = Product::getUserList();
        require_once ('./views/product/index.php');
    }
}

?>