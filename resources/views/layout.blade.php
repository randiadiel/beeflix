<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <div class="main text-white">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <a href="{{url()->previous()}}"><i class="fa fa-arrow-left text-light" aria-hidden="true"></i></a>
                    <a href="/" class="text-light text-decoration-none ml-sm-4 ml-2"><h1 class="logo m-0">Beeflix</h1></a>
                </div>
                <a href="/movies" class="btn btn-outline-light">Lihat Semua Film</a>
            </div>
        </nav>
        @yield('body')
    </div>
@yield('script')
</body>
</html>
