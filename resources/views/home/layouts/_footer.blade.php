<footer class="page-footer bg-color">
    <div class="container row center-align">
        <div class="col s12 m8 l8 copy-right">
            本站由&copy;<a href="https://blinkfox.github.io/" target="_blank">Blinkfox</a>基于
            <a href="https://hexo.io/" target="_blank">Hexo</a> 的
            <a href="https://github.com/blinkfox/hexo-theme-matery" target="_blank">hexo-theme-matery</a>主题搭建.
            
            @if('wordCount')
                &nbsp;<i class="fa fa-area-chart"></i>&nbsp;站点总字数:&nbsp;
                <span class="white-color">99999</span>
            @endif
            
            <span id="busuanzi_container_site_pv">
                <i class="fa fa-heart-o"></i>本站总访问量 <span id="busuanzi_value_site_pv" class="white-color">666</span>
            </span>
            <span id="busuanzi_container_site_uv">
                <i class="fa fa-users"></i>次,&nbsp;访客数 <span id="busuanzi_value_site_uv" class="white-color">999</span> 人.
            </span>
        </div>
        
        <div class="col s12 m4 l4 social-link <%- socialClass %>">
            @include('home.layouts._social_link')
        </div>
    </div>
</footer>

<div class="progress-bar"></div>
