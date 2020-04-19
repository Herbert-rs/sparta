<div class="form-group form-group-default readonly {!! isset($class)?$class:'' !!}" style="background-color:{!! $color !!};{!! isset($style)?$style:'' !!}">
    {!! Form::label($name, $label,['class' => 'fade']) !!}
    <input type="text" id="{!! isset($id)?$id:'' !!}" name="{!! isset($name)?$name:'' !!}"
           style="{!! isset($field_style)?$field_style:'' !!}"
           class="form-control input-sm"
           value="{!! nl2br($value) !!}"
           readonly="readonly">
</div>
