@extends('default')
@section('content-fluid')

<div class="container">
    <div class="row">

        <div class="col-md-6">

            <form style="min-height: 466px" class="singup-form" method="post" action="{{route('login')}}">
                @csrf
                <h3 class="singup-head"><i class="fa fa-lg fa-fw fa-user"></i>Já possui cadastro? Entre com suas credenciais</h3>
                <div style="margin-top: 15%" class="container-input">
                    @include('auth.form')
                </div>
                <div style="margin-top: 22%" class="form-group btn-container">
                    <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Clique para entrar</button>
                </div>
            </form>

        </div>

        <div class="col-md-6">

            <form style="min-height: 466px" class="singup-form" method="post" action="{{ route('company.sign_up') }}">
                <h3 class="singup-head"><i class="fa fa-lg fa-fw fa-user"></i>Cadastre-se como Empresa</h3>
                @csrf
                @include('company.form')

                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Clique para se cadastrar</button>
                </div>
            </form>

        </div>
    </div>
</div>
@stop
