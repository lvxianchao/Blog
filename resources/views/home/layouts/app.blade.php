<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    {{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
    {{--<title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>--}}
    {{--<link rel="stylesheet" href="{{ asset('vendor/materialize/css/materialize.min.css') }}">--}}
    {{--<link href="{{ asset('css/home.css') }}" rel="stylesheet">--}}
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
    {{--<script src="{{ asset('vendor/materialize/js/materialize.min.js') }}"></script>--}}
    {{--</head>--}}
    @include('home.layouts._head')
    <body>
        <div id="app">
            {{--导航--}}
            @include('home.layouts._navbar')
            
            @yield('content')
        </div>
    </body>
    
    <script>
        $(function () {
            $(document).ready(function () {
                $('.sidenav').sidenav();
            });
        });
    </script>
</html>
