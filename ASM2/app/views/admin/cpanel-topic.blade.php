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
                        {{-- <td scope="row">
                            @if($p->status == 1)
                            <span style="color:green">Active</span>
                            @else
                            <span style="color:red">Closed</span>
                            @endif
                        </td> --}}
                        <td><div class="toggle-one"><input class="statusChecked" type="checkbox" value="{{$p->id}}" {{$p->StatusBnt()}} data-toggle="toggle"></div></td>
                        {{-- <td><a class="btn btn-primary" href="{{BASE_URL . 'cpanel-topic/edit/' . $p->id}}">Sửa</a></td> --}}
                        <td><a class="btn btn-info" href="{{BASE_URL . 'cpanel-topic/info/' . $p->id}}">Danh sách bài viết</a></td>
                        {{-- <td><a class="btn btn-danger" href="{{BASE_URL . 'cpanel-topic/del/' . $p->id}}">Xóa</a></td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
        const qSelectAll = document.querySelectorAll.bind(document);
        const qSelect = document.querySelector.bind(document);

        if (document.querySelectorAll('.toggle-one')) {
            if (qSelectAll('.toggle-one')) {
                qSelectAll('.toggle-one').forEach((element,index) => {
                    element.addEventListener('click', e => {
                        console.log('bandau',qSelectAll('.statusChecked')[index].value);

                        console.log(qSelectAll('.statusChecked')[index].checked ? 2 : 1);
                        $.ajax({
                            type: "post",
                            url: "http://localhost:8080/php2/asm2/cpanel-topic/saveStatus",
                            data: {
                                id: qSelectAll('.statusChecked')[index].value,
                                status: qSelectAll('.statusChecked')[index].checked ? 2 : 1,
                            },
                            success: function (response) {
                                console.log('Thành công')
                            }
                        });
                    });
                });
            };
        };
    
  </script>
  
@endsection