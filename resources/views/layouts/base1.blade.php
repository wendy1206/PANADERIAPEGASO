<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container" style="background-color:#58D68D ;">
                <div class="col  text-center">
                    <h1 style="font-size:70px">Closets</h1>
                </div>
            </div>
        </nav>
        <main class="py-4 container">
            @yield('content')
        </main>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container" style="background-color:#58D68D;">
                <div class="col  text-center">
                    <h5 style="font-size:25px">Closets.com</h5>
                    <p style="font-size:15px">Closets de Colombia S.A. Manizales Colombia</p>
                    <p style="font-size:15px">© 2020 Copyright<p>
                </div>
            </div>
        </nav>
    </div>
</body>
</html>