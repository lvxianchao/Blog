<div class="bg-cover @if(Request::route() == route('home.index'))  @endif about-cover" style="background-image: url('{{ asset('images/4.jpg') }}')">
    {{--<% if (is_home() && page.current === 1) { %>index-cover<% } %>--}}
    <div class="container">
        <div class="row">
            <div class="col s10 offset-s1 m8 offset-m2 l8 offset-l2">
                <div class="brand">
                    <div class="title center-align">Subtitle</div>
                    <div class="description center-align">This is your root _config.yml 'description' value.</div>
                </div>
            </div>
        </div>
        {{--<% if (is_home() && page.current === 1) { %>--}}
        @if(Request::route() == route('home.index'))
            <div class="cover-btns">
                <a href="#recommend-sections" class="waves-effect waves-light btn">
                    <i class="fa fa-angle-double-down"></i>继续阅读
                </a>
                
                @if('indexBtn')
                    <a href="" class="waves-effect waves-light btn" target="_blank">
                        <i class="fa fa-home"></i>
                        <span>home.me</span>
                    </a>
                @elseif('githubLink.enabled')
                    <a href="" class="waves-effect waves-light btn" target="_blank">
                        <i class="fa fa-github"></i>
                        <span>github.me</span>
                    </a>
                @endif
            </div>
            
            <div class="cover-social-link">
                @include('home.layouts._social_link')
            </div>
            {{--<% } %>--}}
        @endif
    </div>
</div>

<script>
    // Dynamically switch banner pictures every day.
    // $('.bg-cover').css('background-image', 'url(/medias/banner/' + new Date().getDay() + '.jpg)');
</script>
