@extends('admin.public.app')

@section('title', '文章列表')

@section('content')
    @include('admin.public._tab', ['route' => 'posts', 'title' => '文章'])

    <table class="table table-bordered table-hover text-center">
        <tr>
            <th>ID</th>
            <th>标题</th>
            <th>关联标签数量</th>
            <th>创建时间</th>
            <th>修改时间</th>
            <th>操作</th>
        </tr>

        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>
                    <a href="{{ $post->link() }}">{{ $post->title }}</a>
                </td>
                <td>{{ $post->tags->count() }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td>
                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary btn-sm">编辑</a>
                    <button class="btn btn-danger btn-sm">删除</button>
                    <form action="{{ route('admin.posts.destroy', $post) }}" method="post">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="d-md-flex justify-content-center">{{ $posts->links() }}</div>
@endsection

@section('scripts')
    <script>
        $(function () {
            $('.btn-danger').on('click', function () {
                $(this).next('form').submit();
            });
        });
    </script>
@endsection
