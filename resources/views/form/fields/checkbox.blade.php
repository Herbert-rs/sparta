<?php
$field_options = ['class' => ''];
if(isset($required) && $required == true){
    $field_options = array_merge($field_options, ['required' => 'required']);
}
if(isset($extra_field_options) && is_array($extra_field_options)){
    $field_options = array_merge($field_options, $extra_field_options);
}
?>

<div class="form-group form-group-default {{ (isset($required) && $required == true?'required':'')  }} {{ ($errors->has($name) ? 'has-error' : '') }}">
    {!! Form::label($name, $label,['class' => 'fade']) !!}
    <div class="checkbox check-success" style="margin-top:0px;margin-bottom: 0px;">
        &nbsp;{!! Form::checkbox($name, ( isset($value) ? $value : null ),( isset($value) ? $value : false ),$field_options ) !!}
        {!! Form::label($name, "Sim") !!}
    </div>
    @include('layouts.partials.field-validation', ['field_name' => $name])
</div>
