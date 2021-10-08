@extends('admin.admin-layout.main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <main class="admin-create-product-page">
            <div class="container mt-4">
                <div class="box-form-create">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nameProduct">Tiêu đề:</label>
                            <input type="text" class="form-control" name="title" value="{{ $model->title }}">
                        </div>
                        <div class="form-group">
                            <label for="nameProduct">Topic:</label>
                            <select name="topic_id" class="form-control">
                                @foreach ($topics as $tp)
                                    <option 
                                    @if($tp->id == $model->topic_id)
                                    selected
                                    @endif
                                    value="{{$tp->id}}">{{$tp->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="priceProduct">Ảnh: </label>
                            <img class="image_edit" src="@if($model->image) {{PUBLIC_PATH.$model->image}} @else {{PUBLIC_PATH .'uploads/no-image.jpg'}} @endif" width="300px">
                            <input type="file" id="upImage" class="form-control" name="image" accept=".jpg, .jpeg, .png">
                        </div>
                        <div class="form-group">
                            <label for="informationProduct">Nội dung</label>
                            <input type="text" class="form-control" name="content"  value="{{ $model->content }}"/>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Update bài viết</button>
                    </form>
                    <a type="submit" href="{{BASE_URL . 'cpanel'}}" class="btn btn-primary">Xem danh
                        sách</a>
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