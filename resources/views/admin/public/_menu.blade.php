<div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
        <ul class="layui-nav layui-nav-tree">
            {{--Dashboard--}}
            <li class="layui-nav-item {{ active_class(if_route('admin.dashboard'), 'layui-this') }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-columns"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            {{--标签管理--}}
            <li class="layui-nav-item {{ active_class(if_route_pattern('admin.tags.*'), 'layui-this') }}">
                <a href="{{ route('admin.tags.index') }}">
                    <i class="fa fa-columns"></i>
                    <span>标签管理</span>
                </a>
            </li>
            {{--文章管理--}}
            <li class="layui-nav-item {{ active_class(if_route_pattern('admin.posts.*'), 'layui-this') }}">
                <a href="{{ route('admin.posts.index') }}">
                    <i class="fa fa-columns"></i>
                    <span>文章管理</span>
                </a>
            </li>
        </ul>
    </div>
</div>
