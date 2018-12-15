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
        </ul>
    </div>
</div>
