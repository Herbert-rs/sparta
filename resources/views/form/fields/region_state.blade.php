<div class="form-group form-group-default form-group-default-select2 {{ (isset($required) && $required == true?'required':'')  }} {{ ($errors->has($name) ? 'has-error' : '') }}">
    {!! Form::label($name, $label,['class' => 'fade']) !!}
    {!! Form::select($name, [],null, ['class' => 'form-control','data-load-region' => 2, 'data-value' => (isset($customer_city->parent_id) & $customer_city->parent_id <> 1?$customer_city->parent_id:null)]) !!}
    @include('layouts.partials.field-validation', ['field_name' => $name])
</div>