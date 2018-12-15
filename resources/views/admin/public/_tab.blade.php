<ul class="nav nav-tabs mb-md-3">
    <li class="nav-item">
        <a class="nav-link {{ active_class(if_route("admin.{$route}.index")) }}" href="{{ route("admin.{$route}.index") }}">{{ $title }}列表</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ active_class(if_route("admin.{$route}.create")) }}" href="{{ route("admin.{$route}.create") }}">添加{{ $title }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled {{ active_class(if_route("admin.{$route}.edit")) }}" href="javascript: void(0);">编辑{{ $title }}</a>
    </li>
</ul>
