@foreach(['success', 'primary', 'warning', 'danger'] as $info)
    @if(session()->has($info))
        <div class="alert alert-{{ $info }}">
            <span>{{ session($info) }}</span>
            <button class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif
@endforeach
