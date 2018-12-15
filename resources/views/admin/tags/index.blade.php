@extends('admin.public.app')

@section('title', '标签')

@section('content')
    @include('admin.public._tab', ['route' => 'tags', 'title' => '标签'])

    <table class="table table-bordered table-hover text-center">
        <tr>
            <th>ID</th>
            <th>标签名称</th>
            <th>关联文章数量</th>
            <th>创建时间</th>
            <th>修改时间</th>
            <th>操作</th>
        </tr>

        @foreach($tags as $tag)
            <tr>
                <td>{{ $tag->id }}</td>
                <td>{{ $tag->name }}</td>
                <td>3</td>
                <td>{{ $tag->created_at }}</td>
                <td>{{ $tag->updated_at }}</td>
                <td>
                    <a href="{{ route('admin.tags.edit', $tag) }}" class="btn btn-outline-dark btn-sm">编辑</a>
                    <a href="" class="btn btn-outline-danger btn-sm">删除</a>
                    <form action="{{ route('admin.tags.destroy', $tag) }}">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="d-md-flex justify-content-center">{{ $tags->links() }}</div>
@endsection
