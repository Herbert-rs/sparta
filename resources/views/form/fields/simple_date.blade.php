<?php
$field_options = ['class' => 'form-control input-sm','autocomplete'=>'off'];
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

<div class="form-group form-group-default {{ (isset($required) && $required == true?'required':'')  }} {{ ($errors->has($name) ? 'has-error' : '') }}">
    @if(isset($label))
        {!! Form::label($name, $label,['class' => 'fade']) !!}
    @endif
    {!! Form::text($name, ( isset($value) ? $value : null ),$field_options ) !!}
    @include('layouts.partials.field-validation', ['field_name' => $name])
</div>

<script type="text/javascript">
/*
    bugfix para issue abaixo.
    https://github.com/xdan/datetimepicker/issues/573
*/
$.datetimepicker.setDateFormatter({
    parseDate: function (date, format) {
        var d = moment(date, format);
        return d.isValid() ? d.toDate() : false;
    },
    formatDate: function (date, format) {
        return moment(date).format(format);
    },
});


    $('#{!! $name !!}').datetimepicker({
        format:'YYYY-MM-DD',
        timepicker:false,
        formatDate:'YYYY-MM-DD'
    });
</script>