@extends('user.default', ['title' => 'Meu perfil'])
@section('content-user')
    @include('company.form', ['data' => $data])
@stop
