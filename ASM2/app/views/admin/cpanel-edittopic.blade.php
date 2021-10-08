@extends('admin.admin-layout.main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <main class="admin-create-product-page">
            <div class="container mt-4">
                <div class="box-form-create">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nameProduct">Tên Topic:</label>
                            <input type="text" class="form-control" name="name" value="{{$topic->name}}">
                        </div>
                        <div class="form-group">
                            <label for="nameProduct">Trạng thái</label>
                            <select name="status" class="form-control">
                                @foreach (STATUS_TOPIC as $id => $valuests)
                                    <option 
                                    @if($id == $topic->status)
                                    selected
                                    @endif
                                    value="{{$id}}">{{$valuests}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Sửa</button>
                    </form>
                    <a type="submit" href="{{BASE_URL . 'cpanel-topic'}}" class="btn btn-primary">Xem danh
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