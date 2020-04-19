<div class="form-group form-group-default readonly {!! isset($class)?$class:'' !!}" style="background-color:white;{!! isset($style)?$style:'' !!}">
    {!! Form::label($name, $label,['class' => 'fade']) !!}
    <div style="{!! isset($field_style)?$field_style:'' !!}" class="form-control input-sm" readonly="readonly">{!! nl2br($value) !!}</div>
</div>