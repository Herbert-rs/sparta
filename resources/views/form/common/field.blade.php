@php

    $field_options = ['class' => 'form-control input-sm'];
    if(isset($required) && $required == true){
        $field_options = array_merge($field_options, ['required' => 'required']);
    }

    if(isset($readonly) && $readonly == true){
        $field_options = array_merge($field_options, ['readonly' => 'readonly']);
    }

    if(isset($validate) && $validate == true){
        $field_options = array_merge($field_options, ['validate' => 'validate']);
    }

    if(isset($extra_field_options) && is_array($extra_field_options)){
        $field_options = array_merge($field_options, $extra_field_options);
    }
    if(isset($extra_classes) && is_string($extra_classes)){
        $field_options['class'] .= " $extra_classes";
    }
    // Codigo Blade abaixo está inline para evitar erros de inclusao em JS devido a quebras de linha
@endphp

<div class="form-group {{ (isset($required) && $required == true?'required':'')  }}

@php
    $validation_name = str_replace(']','',str_replace('[','.',$name));
@endphp

{{ ($errors->has($validation_name) ? 'has-danger' : '') }}">
    @if(isset($label))
        <label for="{!! $name !!}">{!! $label !!}</label>
    @endif

    @if(isset($pre_input_addon))
        <div class="input-group">
    @endif

    @include("form.fields.$type")
    <p class="help-block"></p>

    @if(isset($pre_input_addon))
            <div class="input-group-append">
                {!! ($pre_input_addon?:"") !!}
            </div>
        </div>
    @endif

    @include('form.common.validation_message', ['field_name' => $validation_name])
</div>
