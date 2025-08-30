@if (Session::has(KEY_SUCCESS))
    <div class="alert alert-success">
        {{ Session::get(KEY_SUCCESS) }}
    </div>
@elseif(Session::has(KEY_FAIL))
    <div class="alert alert-fail">
        {{ Session::get(KEY_FAIL) }}
    </div>
@endif