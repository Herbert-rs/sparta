@extends('user.default', ['title' => 'Meu perfil'])
@section('content-user')

    <form method="post" action="{{ route('user.profile.update') }}">
    
    @csrf
    @include('company.form', ['data' => $data])

    <div class="form-group btn-container">
        <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Atualizar perfil</button>
    </div>
@stop
