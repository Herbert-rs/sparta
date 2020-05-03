<?php
    $field_options = ['class' => 'form-control form-control-line','autocomplete' => "section-$name" ];
    if(isset($required) && $required == true){
        $field_options = array_merge($field_options, ['required' => 'required']);
    }
    if(isset($extra_field_options) && is_array($extra_field_options)){
        $field_options = array_merge($field_options, $extra_field_options);
    }
    if(isset($extra_classes) && is_string($extra_classes)){
        $field_options['class'] .= " $extra_classes";
    }
    // Codigo Blade abaixo está inline para evitar erros de inclusao em JS devido a quebras de linha
?>
<div class="form-group {{ (isset($required) && $required == true?'required':'')  }}
     {{ ($errors->has($name) ? 'has-error' : '') }}">
    @if(isset($label))
        {!! Form::label($name, $label,['class'=>'col-md-12']) !!}
    @endif
    @if(isset($button))
        <div class="col-md-12">
            <div class="input-group">  
                {!! Form::text($name, ( isset($value) ? $value : null ),$field_options ) !!}
                <div class="input-group-append">
                    <button class="btn btn-success" id="btn-{!! $name !!}" type="button" onclick="{!! $button ?? '' !!}">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>        
    @else
        <div class="col-md-12">
            {!! Form::text($name, ( isset($value) ? $value : null ),$field_options ) !!}
        </div>         
    @endif
</div> 
{{-- @include('layouts.partials.field-validation', ['field_name' => $name]) --}}