@extends('admin.admin-layout.main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Owner_by</th>
                <th scope="col">Status</th>
                <th scope="col" colspan="1">Chức năng</th>
            </tr>
            </thead>
            <tbody id="show">
                @foreach($topics as $p)
                    <tr>
                        <td scope="row">{{$p->id}}</td>
                        <td scope="row">{{$p->name}}</td>
                        <td scope="row">{{$p->user->name}}</td>
                        <td scope="row">
                            @if($p->status == 1)
                            <span style="color:green">Active</span>
                            @else
                            <span style="color:red">Closed</span>
                            @endif
                        </td>
                        {{-- <td><input class="toggle-one" type="checkbox" checked data-toggle="toggle"></td> --}}
                        <td><a class="btn btn-primary" href="{{BASE_URL . 'cpanel-topic/edit/' . $p->id}}">Sửa</a></td>
                        {{-- <td><a class="btn btn-danger" href="{{BASE_URL . 'cpanel-topic/del/' . $p->id}}">Xóa</a></td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    window.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.toggle-one').forEach(e => {
            e.addEventListener("click", function() {
            console.log('xxxx');
            });
        });
    });
  </script>
@endsection