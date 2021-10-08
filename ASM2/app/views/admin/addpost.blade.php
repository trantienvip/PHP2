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
                            <input type="text" class="form-control" name="title"
                                placeholder="Tiêu đề . . ." required>
                        </div>
                        <div class="form-group">
                            <label for="nameProduct">Topic:</label>
                            <select name="topic_id" class="form-control">
                                @foreach ($topics as $tp)
                                    <option value="{{$tp->id}}">{{$tp->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="priceProduct">Ảnh: </label>
                            <input type="file" class="form-control" name="image" accept=".jpg, .jpeg, .png">
                        </div>
                        <div class="form-group">
                            <label for="informationProduct">Nội dung</label>
                            <textarea type="text" class="form-control" name="content"
                                placeholder="Nội dung . . ."></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </form>
                    <a type="submit" href="{{BASE_URL . 'cpanel'}}" class="btn btn-primary">Xem danh
                        sách</a>
                </div>
                </div>
            </div>
            <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
            <script src="./assets/js/add.js"></script>
        </main>

    </div>
</div>
@endsection