<?php
$routeArray = Illuminate\Support\Str::parseCallback(\Route::currentRouteAction(), null);
$controller = class_basename(head($routeArray));
$action = last($routeArray);
?>
@if(\App\Helpers\check_permission("$controller@{$action}Store"))
    @include("form.$type",[
        'name' => $name,
        'label' => $label,
        'value' => (isset($value)?$value:null),
        'options' => (isset($options)?$options:[])
    ])
@else
    @include('form.readonly',['name' => '','value' => $content,'label' => $label])
@endif
