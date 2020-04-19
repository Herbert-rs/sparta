@if ( $errors->has($field_name) )
    <span class="help-block field-error">
            @foreach ( $errors->get($field_name) AS $m )
            <div><i class="fa fa-angle-right"></i> {!! $m !!}</div>
        @endforeach
    </span>
@endif
