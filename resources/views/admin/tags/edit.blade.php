@extends('admin.public.app')

@section('title', '编辑标签')

@section('content')
    @include('admin.public._tab', ['route' => 'tags', 'title' => '标签'])

    <div class="row">
        <div class="col-md-8 mx-md-auto">
            <form action="{{ route('admin.tags.update', $tag) }}" method="post" autocomplete="off">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label for="name">标签名称</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $tag->name }}" required>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary w-25">更新</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
