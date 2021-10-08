@extends('admin.admin-layout.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Images</th>
                    <th scope="col">topics</th>
                    <th scope="col">Author</th>
                    <th scope="col" colspan="2">Chức năng</th>
                </tr>
                </thead>
                <tbody id="show">
                    @foreach($posts as $p)
                        <tr>
                            <td scope="row">{{$p->id}}</td>
                            <td scope="row">{{$p->title}}</td>
                            <td scope="row"><img src="@if($p->image) {{PUBLIC_PATH.$p->image}} @else {{PUBLIC_PATH .'uploads/no-image.jpg'}} @endif" width ="80px" height ="55px"></td>
                            <td scope="row">{{$p->topic->name}}</td>
                            <td scope="row">{{$p->user->name}}</td>
                            <td><a class="btn btn-primary" href="{{BASE_URL . 'cpanel/edit/' . $p->id}}">Sửa</a></td>
                            <td><a class="btn btn-danger" href="{{BASE_URL . 'cpanel/del/' . $p->id}}">Xóa</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection