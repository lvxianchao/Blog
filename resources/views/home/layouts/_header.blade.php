<header class="navbar-fixed">
    <nav id="headNav" class="bg-color nav-transparent">
        <div id="navContainer" class="container">
            <div class="nav-wrapper">
                <div class="brand-logo">
                    <a href="{{ route('home.index') }}" class="waves-effect waves-light">
                        <img src="{{ asset('images/logo.png') }}" class="logo-img hide-on-small-only">
                        <span class="logo-span">{{ config('app.name') }}</span>
                    </a>
                </div>
                
                @include('home.layouts._navigation')
            </div>
        </div>
        
        @if('github.link')
            @include('home.layouts._github_link')
        @endif
    </nav>
</header>
