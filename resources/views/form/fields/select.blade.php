{!! Form::select($name, (isset($options) ? $options : [] ),(isset($value)?$value:null), array_merge($field_options, ['class' => 'form-control input-sm'])) !!}
