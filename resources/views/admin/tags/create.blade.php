@extends('admin.public.app')

@section('title', '添加标签')

@section('content')
    @include('admin.public._tab', ['route' => 'tags', 'title' => '标签'])

    <div class="row">
        <div class="col-md-8 mx-md-auto">
            <form action="{{ route('admin.tags.store') }}" method="post" autocomplete="off">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="name">标签名称</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary w-25">添加</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
