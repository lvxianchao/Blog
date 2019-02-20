@extends('admin.public.app')

@section('title', '添加文章')

@section('content')
    @include('admin.public._tab', ['route' => 'posts', 'title' => '文章'])

    <div class="row">
        <div class="col-md-8 mx-md-auto">
            <form action="{{ route('admin.posts.store') }}" method="post" autocomplete="off">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="name">标题</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" required>
                </div>

                <div class="form-group">
                    <label for="name">标签</label>
                    <div class="ui fluid multiple search selection dropdown form-control-sm">
                        <input type="hidden" name="tags" value="{{ old('tags') }}">
                        <i class="dropdown icon"></i>
                        <div class="default text">标签</div>
                        <div class="menu">
                            @foreach($tags as $tag)
                                <div class="item" data-value="{{ $tag->id }}">{{ $tag->name }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">内容</label>
                    <textarea name="content" id="editor" cols="30" rows="10">{{ old('content') }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary w-25">添加</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('vendor/simplemde/simplemde.min.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('vendor/simplemde/simplemde.min.js') }}"></script>
    <script>
        let simplemde = new SimpleMDE({
            element: document.getElementById('editor'),
            spellChecker: false,
            tabSize: 4,
            autoDownloadFontAwesome: false,
            toolbar: [
                "bold", "italic", "heading", "|", "quote", "code", "table",
                "horizontal-rule", "unordered-list", "ordered-list", "|",
                "link", "image", "|",
                {
                    name: 'side-by-side',
                    action: function customFunction(editor) {
                        document.getElementById('app').style.zIndex = document.getElementById('app').style.zIndex === 1100 ? 0 : 1100;
                        editor.toggleSideBySide();
                        editor.toggleFullScreen();
                    },
                    className: 'fa fa-columns no-disable no-mobile',
                },
                {
                    name: "fullscreen",
                    action: function (editor) {
                        document.getElementById('app').style.zIndex = document.getElementById('app').style.zIndex === 1100 ? 0 : 1100;
                        editor.toggleFullScreen();
                    },
                    className: "fa fa-arrows-alt no-disable no-mobile",
                },
                "|",
                {
                    name: "guide",
                    action: function customFunction(editor) {
                        var win = window.open('https://github.com/riku/Markdown-Syntax-CN/blob/master/syntax.md', '_blank');
                        if (win) {
                            //Browser has allowed it to be opened
                            win.focus();
                        } else {
                            //Browser has blocked it
                            alert('Please allow popups for this website');
                        }
                    },
                    className: "fa fa-info-circle",
                    title: "Markdown 语法！",
                },
            ],
        });
        $(function () {
            $('.ui.dropdown').dropdown({
                allowAdditions: true,
            });

            $('form').on('keydown', function (event) {
                console.log('fuck');
                if (event.keyCode === 13) {
                    return false;
                }
            });
        });
    </script>
@endsection
