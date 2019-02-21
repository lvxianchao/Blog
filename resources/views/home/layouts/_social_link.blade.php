@if('github')
    <a href="" class="tooltipped" target="_blank" data-tooltip="访问我的GitHub" data-position="top" data-delay="50">
        <i class="fa fa-github"></i>
    </a>
@endif

@if('email')
    <a href="mailto:coderlxc@gmail.com" class="tooltipped" target="_blank" data-tooltip="邮件联系我" data-position="top" data-delay="50">
        <i class="fa fa-envelope-open"></i>
    </a>
@endif

@if('qq')
    <a href="tencent://AddContact/?fromId=50&fromSubId=1&subcmd=all&uin=878275660" class="tooltipped" data-tooltip="QQ联系我: 878275660" data-position="top" data-delay="50">
        <i class="fa fa-qq"></i>
    </a>
@endif

@if('feed')
    <a href="/website.xml" class="tooltipped" target="_blank" data-tooltip="RSS 订阅" data-position="top" data-delay="50">
        <i class="fa fa-rss"></i>
    </a>
@endif
