<?php
namespace App\Controllers;
use App\Models\Post;
use App\Models\User;

class SigninController extends BaseController{
    public function signin(){
        $title = 'Đăng ký';
        $this->render('home.signin', compact('title'));
    }

    public function postSignin(){
        $model = new User();
        $model->fill($_POST);
        $model->password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $model->save();
        header('location: ' . BASE_URL .'login');
    }
}

?>