@if ( $errors->has($field_name) )
    <small class="form-control-feedback">
    <ul>
        @foreach ( $errors->get($field_name) AS $m )
            <li>{!! $m !!}</li>
        @endforeach
    </ul>
    </small>
@endif
