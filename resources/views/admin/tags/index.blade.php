@extends('admin.public.app')

@section('title', '标签')

@section('content')
    @include('admin.public._tab', ['route' => 'tags', 'title' => '标签'])


@endsection
