<div class="layui-header">
    <a href="{{ route('dashboard') }}" class="layui-logo" id="layui-logo">{{ config('app.name') }}</a>
    <ul class="layui-nav layui-layout-right">

        <li class="layui-nav-item">
            <a href="javascript: void(0);">
                <img src="{{ asset('svg/403.svg') }}" class="layui-nav-img">
                <span>{{ Auth::user()->username }}</span>
            </a>
            {{--{{ route('password',\Auth::id()) }}--}}
            <dl class="layui-nav-child layui-anim layui-anim-upbit">
                <dd><a href="javascript: void(0);" id="changePassword">修改密码</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">退出</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</div>

<script>
    document.querySelector('#changePassword').addEventListener('click', function (e) {
        layer.prompt({
            formType: 1,
            title: '输入新密码',
        }, function (password, index, elem) {

            axios.patch('{{ route('password', Auth::id()) }}', {password: password}).then(function (response) {
                if (response.data.status) {
                    layer.msg('密码修改成功，重新登录生效！')
                }
            });

            layer.close(index);
        });
    }, false);
</script>
