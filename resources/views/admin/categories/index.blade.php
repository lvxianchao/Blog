@extends('admin.public.app')

@section('title', '分类列表')

@section('content')
    @include('admin.public._tab', ['route' => 'categories', 'title' => '分类'])

    <table class="table table-bordered table-hover text-center">
        <tr>
            <th>ID</th>
            <th>分类名称</th>
            <th>关联文章数量</th>
            <th>创建时间</th>
            <th>修改时间</th>
            <th>操作</th>
        </tr>

        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->posts->count() }}</td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->updated_at }}</td>
                <td>
                    <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-primary btn-sm">编辑</a>
                    <button class="btn btn-danger btn-sm">删除</button>
                    <form action="{{ route('admin.categories.destroy', $category) }}" method="post">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="d-md-flex justify-content-center">{{ $categories->links() }}</div>
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
