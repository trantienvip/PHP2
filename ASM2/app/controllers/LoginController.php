<?php
namespace App\Controllers;
use App\Models\Post;
use App\Models\User;

class LoginController extends BaseController{
    public function login(){
        $title = 'Đăng nhập';
        $this->render('home.login', compact('title'));
    }

    public function postLogin(){
        $email = $_POST['email'];
        $password = trim($_POST['password']);

        $user = User::where('email', $email)->first();
        if($user && password_verify($password, $user->password)){
            $_SESSION['auth'] = [
                'id' => $user->id,
                'email' => $user->email,
                'name' => $user->name,
                'avatar' => $user->avatar,
            ];
            header('location: ' .BASE_URL.'cpanel');
            die;
        }else{
            $title = 'Đăng nhập';
            $msg = "tài khoản/mật khẩu không chính xác";
            $this->render('home.login', compact('msg', 'title'));
        }
    }

    public function logout(){
        unset($_SESSION['auth']);
        header('location: ' . BASE_URL);
    }
}

?>