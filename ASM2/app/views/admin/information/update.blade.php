@extends('admin.admin-layout.main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <main class="admin-create-product-page">
            <div class="container mt-4">
                <div class="box-form-create">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nameProduct">Họ và tên:</label>
                            <input type="text" class="form-control" name="name" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="nameProduct">Email:</label>
                            <input type="text" class="form-control" name="email" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label for="priceProduct">Avatar: </label>
                            <img class="image_edit" src="@if($user->avatar) {{PUBLIC_PATH.$user->avatar}} @else {{PUBLIC_PATH .'uploads/no-image.jpg'}} @endif" width="300px">
                            <input type="file" id="upImage" class="form-control" name="image" accept=".jpg, .jpeg, .png">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
                </div>
            </div>
            <script>
                document.querySelector("#upImage").addEventListener("change", function(){
                    var reader = new FileReader();
                    reader.onload = function(){
                        document.querySelector(".image_edit").src = reader.result;
                    };
                    reader.readAsDataURL(event.target.files[0]);
                });
            </script>
        </main>

    </div>
</div>
@endsection