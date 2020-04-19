<?php
$field_options = ['class' => 'form-control input-sm'];
if(isset($required) && $required == true){
    $field_options = array_merge($field_options, ['required' => 'required']);
}
if(isset($extra_field_options) && is_array($extra_field_options)){
    $field_options = array_merge($field_options, $extra_field_options);
}
?>

<div class="form-group form-group-default {{ (isset($required) && $required == true?'required':'')  }} {{ ($errors->has($name) ? 'has-error' : '') }}">
    {!! Form::label($name, $label,['class' => 'fade']) !!}
    <div class="radio radio-primary radio-custom">
      @foreach($fields as $key => $value)
        {!! Form::radio($name, $value,( isset($value) ? $value == true : null ),['class' => '','id' => "$key"]) !!}
        {!! Form::label("$key", "$key") !!}
      @endforeach

        @include('layouts.partials.field-validation', ['field_name' => $name])
    </div>
</div>
