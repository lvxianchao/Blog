<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('home.layouts._head')
    
    <body>
        @include('home.layouts._header')
        
        @yield('content')
        
        @include('home.layouts._footer')
        
        @include('')
    </body>
    
    <script>
        $(function () {
            $(document).ready(function () {
                $('.sidenav').sidenav();
            });
        });
    </script>
</html>
