@extends('default')
@section('content-fluid')

<div class="container">
    <div class="row">

        <div class="col-md-6">

            <form style="min-height: 466px" class="singup-form" method="post" action="{{route('login')}}">
                @csrf
                <h3 class="singup-head"><i class="fa fa-lg fa-fw fa-user"></i>Já possui cadastro? Entre com suas credenciais</h3>
                <div style="margin-top: 15%" class="container-input">
                    <div class="form-group">
                        <label class="control-label">E-mail:</label>
                        <input class="form-control" type="text" name="email" placeholder="E-mail" autofocus required autocomplete='off'>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Senha:</label>
                        <input class="form-control" type="password" name="password" placeholder="Senha" autofocus required autocomplete='off'>
                    </div>
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
                <div class="form-group">
                    <label class="control-label">E-Mail</label>
                    <input class="form-control" type="email" name="email" placeholder="E-mail" autofocus required autocomplete='off'>
                </div>
                <div class="form-group">
                    <label class="control-label">Senha:</label>
                    <input class="form-control" type="password" name="password" placeholder="Senha" autofocus required autocomplete='off'>
                </div> 
                <div class="form-group">
                    <label class="control-label">Nome da empresa:</label>
                    <input class="form-control" type="text" name="name" placeholder="Nome" autofocus required autocomplete='off'>
                </div>
                <div class="form-group">
                    <label class="control-label">Nome do contato responsável da Empresa</label>
                    <input type="text" class="form-control" name="manager">
                </div>
                <div class="form-group">
                    <label class="control-label">CNPJ</label>
                    <input type="text" class="form-control" name="tax_id" onkeypress="$(this).mask('000.000.000-00');" placeholder="000.000.000-00">
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Clique para se cadastrar</button>
                </div>
            </form>

        </div>
    </div>
</div>
@stop
