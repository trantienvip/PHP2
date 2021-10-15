@extends('layout.main')
@section('content')
<style>
  main{
    text-align: center;
    margin: 60px 0;
  }
  .form-lg-si{
    margin-top: 20px;
    display: flex;
    flex-direction: column;
    grid-row-gap: 1rem;
  }
</style>
<main>
    <h2>Đăng nhập</h2>
    <span style="color:red;">@if(isset($msg)) {{$msg}} @endif</span>
    <div class="row">
      <div class="col-md-3"></div>
        <form class="form-lg-si col-md-6" method="POST">
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
            <div class="form-group">
              Chưa có tài khoản? <a href="{{BASE_URL.'signin'}}">Đăng ký</a> ngay!
            </div>
          </form>
      <div class="col-md-3"></div>
    </div>

</main>
@endsection
