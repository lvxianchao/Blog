<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('vendor/layui/css/layui.css') }}">
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
        @yield('styles')
    </head>
    <body class="layui-layout-body">
        <div class="layui-layout layui-layout-admin">
            @include('admin.public._header')
            @include('admin.public._menu')

            <div class="layui-body {{ route_class() . '-page' }}" id="app">
                <div class="container-fluid pt-3">
                    @include('admin.public._errors')
                    @include('admin.public._messages')
                    @yield('content')
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('vendor/layui/layui.all.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            $(function () {
                // 鼠标悬浮提示
                $('[data-toggle=tooltip]').tooltip();
            });
        </script>
        @yield('scripts')
    </body>
</html>
