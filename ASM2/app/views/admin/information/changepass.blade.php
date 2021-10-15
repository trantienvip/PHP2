@extends('admin.admin-layout.main')
@section('content')
<style>
    #passsai{;
        text-align: center;
        width: 100%;
        display: block;
        color: red;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <main class="admin-create-product-page">
            <div class="container mt-4">
                <div class="box-form-create">
                    <span id="passsai">@if (isset($msg)) {{$msg}} @endif</span>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nameProduct">Mật khẩu cũ</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="nameProduct">Mật khẩu mới</label>
                            <input type="password" class="form-control" name="passwordnew">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Thay đổi mật khẩu</button>
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