<?php
$field_options = ['class' => 'form-control input-sm'];
if(isset($required) && $required == true){
    $field_options = array_merge($field_options, ['required' => 'required']);
}
if(isset($extra_field_options) && is_array($extra_field_options)){
    $field_options = array_merge($field_options, $extra_field_options);
}
if(isset($extra_classes) && is_string($extra_classes)){
    $field_options['class'] .= " $extra_classes";
}
?>

<div class="form-group form-group-default {{ (isset($required) && $required == true?'required':'')  }} {{ ($errors->has($name) ? 'has-error' : '') }} input-group">
    @if(isset($label))
        {!! Form::label($name, $label,['class' => 'fade']) !!}
    @endif
    {!! Form::text($name, ( isset($value) ? $value : null ),$field_options ) !!}
    {!! $button !!}
    @include('layouts.partials.field-validation', ['field_name' => $name])
</div>