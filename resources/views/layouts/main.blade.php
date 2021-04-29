<!doctype html>
<html lang="en">
<head>
    <link href="/style.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@section('title') @show</title>
</head>
<body>
<div class="container">
    <div class="header">
        @include('blocks.menu')
    </div>
</div>
<hr>
<div class="container">
    <div class="content">
        @yield('content')
    </div>
</div>
<hr>
<div class="container">
    <div class="footer">
        @include('blocks.footer')
    </div>
</div>
</body>
</html>
