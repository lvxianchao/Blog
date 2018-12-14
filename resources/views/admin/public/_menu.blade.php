<div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
        <ul class="layui-nav layui-nav-tree">
            {{--控制面板--}}
            <li class="layui-nav-item {{ active_class(if_route('dashboard'), 'layui-this') }}">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-columns"></i>
                    <span>控制面板</span>
                </a>
            </li>

            {{--分类管理--}}
            <li class="layui-nav-item {{ active_class(if_route(['categories.index', 'categories.create', 'categories.edit']), 'layui-this') }}">
                <a href="{{ route('categories.index') }}">
                    <i class="fa fa-columns"></i>
                    <span>分类管理</span>
                </a>
            </li>

            {{--平台管理--}}
            {{--<li class="layui-nav-item {{ active_class(if_route(['platforms.index', 'platforms.create', 'platforms.edit']), 'layui-this') }}">--}}
                {{--<a href="{{ route('platforms.index') }}">--}}
                    {{--<i class="fa fa-columns"></i>--}}
                    {{--<span>平台管理</span>--}}
                {{--</a>--}}
            {{--</li>--}}

            {{--厂商管理--}}
            <li class="layui-nav-item {{ active_class(if_route(['vendors.index', 'vendors.create', 'vendors.edit']), 'layui-this') }}">
                <a href="{{ route('vendors.index') }}">
                    <i class="fa fa-columns"></i>
                    <span>厂商管理</span>
                </a>
            </li>

            {{--语言管理--}}
            <li class="layui-nav-item {{ active_class(if_route(['languages.index', 'languages.create', 'languages.edit']), 'layui-this') }}">
                <a href="{{ route('languages.index') }}">
                    <i class="fa fa-columns"></i>
                    <span>语言管理</span>
                </a>
            </li>

            {{--接口管理--}}
            <li class="layui-nav-item  {{ active_class(if_route(['apis.index', 'apis.create', 'apis.edit', 'params.index', 'params.create', 'params.edit', 'codes.index', 'codes.create', 'codes.edit', 'examples.index', 'examples.create', 'examples.edit']), 'layui-nav-itemed') }}">
                <a href="javascript: void(0);">
                    <i class="fa fa-columns"></i>
                    <span>接口管理</span>
                </a>
                <dl class="layui-nav-child">
                    <dd class="{{ active_class(if_route(['apis.index', 'apis.create', 'apis.edit']), 'layui-this') }}">
                        <a href="{{ route('apis.index') }}" class="pl-5">基本信息</a>
                    </dd>
                    <dd class="{{ active_class(if_route(['params.index', 'params.create', 'params.edit']), 'layui-this') }}">
                        <a href="{{ route('params.index') }}" class="pl-5">参数说明</a>
                    </dd>
                    <dd class="{{ active_class(if_route(['codes.index', 'codes.create', 'codes.edit']), 'layui-this') }}">
                        <a href="{{ route('codes.index') }}" class="pl-5">错误码</a>
                    </dd>
                    <dd class="{{ active_class(if_route(['examples.index', 'examples.create', 'examples.edit']), 'layui-this') }}">
                        <a href="{{ route('examples.index') }}" class="pl-5">请求示例</a>
                    </dd>
                </dl>
            </li>


        </ul>
    </div>
</div>
