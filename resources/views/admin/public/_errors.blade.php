@if (count($errors) > 0)
    <div class="alert alert-danger">
        <h4>有错误发生：</h4>
        <button data-dismiss="alert" class="close">&times;</button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    <span>{{ $error }}</span>
                </li>
            @endforeach
        </ul>
    </div>
@endif
