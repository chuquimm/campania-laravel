<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Sin Título')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/app.css') }}">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="{{ asset('plugins\materialize\css\materialize.css') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @include('partials.navbar')
            <div class="content">
                @yield('content')
            </div>
        </div>
        @include('partials.footer')
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="{{ asset('plugins\jquerry\js\jquery-3.3.1.js') }}"></script>
        <script type="text/javascript" src="{{ asset('plugins\materialize\js\materialize.js') }}"></script>
        @yield('script')
    </body>
</html>
