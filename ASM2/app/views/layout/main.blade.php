<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    @include('layout.style')
</head>
<body>
    <div class="app">
        @include('layout.header')
        <div class="container">
            @yield('content')
        </div>
         @include('layout.footer')
    </div>
    @include('layout.js')
</body>
</html>