@extends('home.layouts.app')

@section('title', '首页')

@section('content')
    <div class="cover" style="background-image: url('../images/4.jpg')">
        <div class="container">
            <div class="row">
                <div class="col m8 offset-m2">
                    <div class="brand center-align">
                        <div class="brand-title">{{ config('app.name') }}</div>
                        <div class="brand-description">从来没有真正的绝境，只有心灵的迷途。</div>
                    </div>
                </div>
            </div>

            <div class="cover-btns">
                <a href="" class="waves-effect waves-light">
                    <i class="fa fa-angle-double-down"></i>
                    <span>继续阅读</span>
                </a>
            </div>
        </div>
    </div>
@endsection
