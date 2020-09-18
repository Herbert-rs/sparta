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

            <form style="min-height: 466px" class="singup-form" method="post" action="{{ route('candidate.sign_up') }}">
                <h3 class="singup-head"><i class="fa fa-lg fa-fw fa-user"></i>Cadastre-se Como Candidato</h3>

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
                    <label class="control-label">Nome:</label>
                    <input class="form-control" type="text" name="name" placeholder="Nome" autofocus required autocomplete='off'>
                </div>
                <div class="form-group">
                    <label class="control-label">CPF/CNPJ</label>
                    <input type="text" class="form-control" name="tax_id" placeholder="000.000.000-00">
                </div>
                <div class="form-group">
                    <label class="control-label">Celular</label>
                    <input type="text" class="form-control cel-sp-mask" name="mobile" placeholder="(00) 00000-0000">
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Clique para se cadastrar</button>
                </div>
            </form>

        </div>
    </div>
</div>
@stop
