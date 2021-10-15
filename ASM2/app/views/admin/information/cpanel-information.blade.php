@extends('admin.admin-layout.main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <main class="admin-create-product-page">
            <div class="container mt-4">
                <div class="box-form-create">
                        <div class="form-group">
                            <label for="nameProduct">Avatar: <img width="50px" src="@if(!empty($user->avatar)){{PUBLIC_PATH.$user->avatar}} @else {{PUBLIC_PATH}}assets\images\users\user-1.jpg @endif" alt=""></label>
                        </div>
                        <div class="form-group">
                            <label for="nameProduct">Họ tên: {{$user->name}}</label>
                        </div>
                        <div class="form-group">
                            <label for="nameProduct">Email: {{$user->email}}</label>
                        </div>
                        <div class="form-group text-center">
                            <a  href="{{BASE_URL.'cpanel/information/update/'.$user->id}}" class="btn btn-success capnhatthongtin">Cập nhật thông tin</a>
                            <a href="{{BASE_URL.'cpanel/information/changepass/'.$user->id}}" class="btn btn-primary thaydoimatkhau">Thay đổi mật khẩu</a>
                        </div>
                </div>
            </div>
        </main>

    </div>
</div>
@endsection