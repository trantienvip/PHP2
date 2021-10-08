@extends('layout.main')
@section('content')
<main>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="#">Tin tức</a></li>
            <li class="breadcrumb-item active" id="title_product" aria-current="page">{{$post->title}}</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8" style="text-align: justify;">
            <h4>{{$post->title}}</h4>
            <img src="@if($post->image) {{PUBLIC_PATH.$post->image}} @else {{PUBLIC_PATH .'uploads/no-image.jpg'}} @endif" style="object-fit: contain;" width="100%" height="300px" alt="">
            <p>{!!$post->content!!}</p>
        </div>
        <div class="col-md-4">
            <script src="https://widgets.coingecko.com/coingecko-coin-market-ticker-list-widget.js"></script>
            <coingecko-coin-market-ticker-list-widget  coin-id="bitcoin" currency="usd" locale="vi"></coingecko-coin-market-ticker-list-widget>
        </div>
    </div>

</main>
@endsection
