<a href="#!" data-target="mobile-nav" class="sidenav-trigger">
    <i class="fa fa-navicon"></i>
</a>

<ul class="right">
    @include('home.layouts.__navigation')
    
    <li>
        <a id="toggleSearch" class="waves-effect waves-light">
            <i id="searchIcon" class="mdi-action-search" title="搜索"></i>
        </a>
    </li>
</ul>

@include('home.layouts._navigation_mobile')
