<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('home.layouts._head')
    </head>
    
    <body>
        @include('home.layouts._header')
        
        @yield('content')
        
        @include('home.layouts._footer')
        
        @include('home.layouts._search')
        
        @include('home.layouts._back_top')
        
        <script src="{{ asset('js/home.js') }}"></script>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
        <script src="{{ asset('js/scrollProgress.min.js') }}"></script>
        <script src="{{ asset('js/metery.js') }}"></script>
    </body>
</html>
