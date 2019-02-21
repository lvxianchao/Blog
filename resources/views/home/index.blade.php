@extends('home.layouts.app')

@section('title', '首页')

@section('content')
    <style type="text/css">
        /* don't remove. */
        .index-cover {
            height: 100vh;
        }
    </style>
    
    @include('home.layouts._background_cover')
@endsection
