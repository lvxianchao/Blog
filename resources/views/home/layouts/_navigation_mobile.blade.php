<div class="side-nav" id="mobile-nav">
    
    <div class="mobile-head bg-color">
        <img src="{{ asset('images/logo.png') }}" class="logo-img circle responsive-img">
        <div class="logo-name">{{ config('app.name') }}</div>
        <div class="logo-desc">The fucking description</div>
    </div>
    
    <ul class="menu-list mobile-menu-list">
        @include('home.layouts.__navigation')
        
        @if(true)
            <li>
                <div class="divider"></div>
            </li>
            <li>
                <a href="https://github.com/lvxianchao/blog" class="waves-effect waves-light" target="_blank">
                    <i class="fa fa-github-square fa-fw"></i>
                    <span>Fork Me</span>
                </a>
            </li>
        @endif
    </ul>
    
    <div class="social-link">
        @include('home.layouts._social_link')
    </div>
</div>
