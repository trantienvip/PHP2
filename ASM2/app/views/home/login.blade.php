@extends('layout.main')
@section('content')
<main>
    <h2>login</h2>
    <span style="color:red;">@if(isset($msg)) {{$msg}} @endif</span>
    <div class="row">
        <form class="col-md-5" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
          </form>
    </div>

</main>
@endsection
