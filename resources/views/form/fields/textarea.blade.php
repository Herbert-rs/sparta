<?php
$field_options = ['class' => 'form-control'];
if(isset($required) && $required == true){
    $field_options = array_merge($field_options, ['required' => 'required']);
}
if(isset($extra_field_options) && is_array($extra_field_options)){
    $field_options = array_merge($field_options, $extra_field_options);
}
if(isset($readonly) && $readonly =='readonly'){
    $field_options = array_merge($field_options, ['readonly'=>'readonly']);
}
// Codigo Blade abaixo está inline para evitar erros de inclusao em JS devido a quebras de linha
?>

{!! Form::textarea($name, ( isset($value) ? $value : null ),$field_options ) !!}
