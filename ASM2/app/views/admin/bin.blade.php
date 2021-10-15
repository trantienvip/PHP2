@extends('admin.admin-layout.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
          <a href="{{BASE_URL.'cpanel/restoreall'}}" class="btn btn-success">Khôi phục tất cả</a>
            <table class="table mt-2">
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
                            <td><a class="btn btn-primary" href="{{BASE_URL . 'cpanel/restore/' . $p->id}}">Khôi phục</a></td>
                            <td><button data-toggle="modal" data-target="#deleteProduct" value="{{$p->id}}" class="btn btn-danger bnt-confirm-delete" href="{{BASE_URL . 'cpanel/del/' . $p->id}}">Xóa vĩnh viễn</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Thong bao -->
    <div id="deleteProduct" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Bạn có chắc chắn muốn xóa? Không thể khôi phục hành động này!
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
              <button type="button" class="btn btn-danger" id="delete_ok" >Xóa</button>
            </div>
          </div>
        </div>
      </div>
    <!-- Thông báo -->
    <form id="formRemove" method="get"></form>
    <script>
        var bntDelete = document.querySelectorAll('.bnt-confirm-delete');
        var delete_ok = document.querySelector('#delete_ok');
        bntDelete.forEach(e => {
                e.addEventListener('click', function() {
                delete_ok.value = e.value;
            });
        });
        delete_ok.addEventListener('click', function(e) {
            // e.preventDefault();
            var deleteFrom = document.querySelector('#formRemove');
            deleteFrom.action = 'http://localhost:8080/php2/ASM2/cpanel/del/'+delete_ok.value;
            deleteFrom.submit();
        });
    </script>
@endsection