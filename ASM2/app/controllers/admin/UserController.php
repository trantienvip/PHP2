<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\User;
use Illuminate\Support\Str;
class UserController extends BaseController{
    //information
    public function information($id) {
        $title = 'Trang cá nhân';
        $user = User::find($id);
        $this->render('admin.information.cpanel-information', compact('title', 'user'));
    }
    public function update($id) {
        $title = 'Cập nhật trang cá nhân';
        $user = User::find($id);
        $this->render('admin.information.update', compact('title', 'user'));
    }
    public function saveUpdate($id) {
        $model = User::find($id);
        $model->fill($_POST);

        $uploadImage = $_FILES['image'];
        if ($uploadImage['size'] > 0) { 
            $fileName = uniqid() . '-' . $uploadImage['name'];
            move_uploaded_file($uploadImage['tmp_name'], './public/uploads/'.$fileName);
            $model->avatar = 'uploads/'.$fileName;
        }
        $model->save();
        $_SESSION['auth'] = [
            'id' => $model->id,
            'email' => $model->email,
            'name' => $model->name,
            'avatar' => $model->avatar,
        ];
        header('location: ' . BASE_URL .'cpanel/information/'.$id);
    }

    public function changePass($id) {
        $title = 'Thay đổi mật khẩu';
        $user = User::find($id);
        $this->render('admin.information.changepass', compact('title', 'user'));
    }
    public function saveChangePass($id) {
        $model = User::find($id);
        $password = $_POST['password'];
        if (password_verify($password, $model->password)) {
            $model->password = password_hash($_POST['passwordnew'], PASSWORD_DEFAULT);
            $model->save();
            header('location: ' . BASE_URL .'cpanel/information/'.$id);
        }else{
            $title = 'Thay đổi mật khẩu';
            $msg = "Mật khẩu cũ không chính xác";
            $this->render('admin.information.changepass', compact('msg', 'title'));
        }
    }
}

?>