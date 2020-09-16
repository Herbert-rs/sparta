@extends('default')
@section('content-fluid')

    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadatro Empresa - Space Jobs</title>
</head>
<body>
<div class="container">
    <div class="row">

        <div class="col-md-6 profile-block">
            <img src="{{asset('img/sparta-profile.png')}}" class="rounded-circle img-profile" alt="Picture 1">

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dapibus fringilla sem tristique lacinia. Nunc rutrum at libero vel rhoncus. Donec in urna non ante interdum imperdiet. Curabitur vel arcu vulputate, suscipit arcu in, venenatis sapien.</p>
            <p class="author" ><strong>- CEO Sparta, Sparta</strong></p>
        </div>
        <div class="col-md-6">

            <form class="singup-form" method="post" action="/company/sign_up">
                <h3 class="singup-head"><i class="fa fa-lg fa-fw fa-user"></i>Cadastre-se Como Empresa</h3>

                @csrf
                <div class="form-group">
                    <label class="control-label">Nome:</label>
                    <input class="form-control" type="text" name="name" placeholder="Nome" autofocus required autocomplete='off'>
                </div>
                <div class="form-group">
                    <label for="imagem">Imagem de perfil:</label>
                    <input type="file" name="avatar" >
                </div>
                <div class="form-group">
                    <label class="control-label">Descrição</label>
                    <input type="text" class="form-control" name="Description">
                </div>
                <div class="form-group">
                    <label class="control-label">E-Mail</label>
                    <input class="form-control" type="email" name="email" placeholder="E-mail" autofocus required autocomplete='off'>
                </div>
                <div class="form-group">
                    <label class="control-label">Contato Responsável da Empresa</label>
                    <input type="text" class="form-control" name="manager">
                </div>
                <div class="form-group">
                    <label class="control-label">CPF/CNPJ</label>
                    <input type="text" class="form-control" name="tax_id" onkeypress="$(this).mask('000.000.000-00');" placeholder="000.000.000-00">
                </div>
                <div class="form-group">
                    <label class="control-label">ID</label>
                    <input type="text" class="form-control" name="building_id" value="1">
                </div>
                <div class="form-group">
                    <label class="control-label">Telefone</label>
                    <label>
                        <input type="text" class="form-control" name="phone" placeholder="(00) 0000-0000">
                    </label>
                </div>
                <div class="form-group">
                    <label class="control-label">Celular</label>
                    <input type="text" class="form-control cel-sp-mask" name="mobile" placeholder="(00) 00000-0000">
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
@stop
