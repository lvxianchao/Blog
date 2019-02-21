<header class="navbar-fixed">
    <nav class="navbar-background-color navbar-background-transparent">
        <div class="container">
            <div class="nav-wrapper">
                <a href="{{ route('home.index') }}" class="brand-logo waves-effect waves-light">
                    <img src="{{ asset('images/logo.png') }}" class="logo-image hide-on-small-only">
                    <span class="logo-desc">{{ config('app.name') }}</span>
                </a>
                <a href="javascript: void(0);" data-target="mobile-demo" class="sidenav-trigger">
                    <i class="fa fa-navicon"></i>
                </a>
                <ul class="right hide-on-med-and-down">
                    @include('home.layouts._navication')
                </ul>
            </div>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        @include('home.layouts._navication')
    </ul>
</header>
