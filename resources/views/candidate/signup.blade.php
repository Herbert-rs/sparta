@extends('default')
@section('content-fluid')

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadatro Candidato - Space Jobs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">

        <div class="col-md-6 profile-block">
            <img src="{{asset('img/sparta-profile.png')}}" class="rounded-circle img-profile" alt="Picture 1">

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dapibus fringilla sem tristique lacinia. Nunc rutrum at libero vel rhoncus. Donec in urna non ante interdum imperdiet. Curabitur vel arcu vulputate, suscipit arcu in, venenatis sapien.</p>
            <p class="author" ><strong>- CEO Sparta, Sparta</strong></p>
        </div>

        <div class="container col-md-6 tab-pane fade in active tab-content">

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#candidate-signup">Cadastre-se</a></li>
                <li><a data-toggle="tab" href="#login">Login</a></li>
            </ul>

            <div class="tab-content">
                <div id="candidate-signup" class="tab-pane fade in active">
                    <form class="singup-form" method="post" action="/candidate/sign_up">
                        <h3 class="singup-head"><i class="fa fa-lg fa-fw fa-user"></i>Cadastre-se Como Candidato</h3>

                        <div class="form-group">
                            <label class="control-label">Nome:</label>
                            <input class="form-control" type="text" name="name" placeholder="Nome" autofocus required autocomplete='off'>
                        </div>
                        <div class="form-group">
                            <label class="control-label">CPF/CNPJ</label>
                            <input type="text" class="form-control" name="tax_id" onkeypress="$(this).mask('000.000.000-00');" placeholder="000.000.000-00">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Celular</label>
                            <input type="text" class="form-control cel-sp-mask" name="mobile" placeholder="(00) 00000-0000">
                        </div>
                        <div class="form-group">
                            <label class="control-label">E-Mail</label>
                            <input class="form-control" type="email" name="email" placeholder="E-mail" autofocus required autocomplete='off'>
                        </div>
                        <div class="form-group btn-container">
                            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Cadastrar</button>
                        </div>
                    </form>
                </div>
                <div id="login" class="tab-pane fade">
                        <form class="singup-form" method="post" action="{{route('login')}}">
                            @csrf
                            <h3 class="singup-head"><i class="fa fa-lg fa-fw fa-user"></i>Login</h3>
                            <div class="form-group">
                                <label class="control-label">E-mail:</label>
                                <input class="form-control" type="text" name="email" placeholder="E-mail" autofocus required autocomplete='off'>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Senha:</label>
                                <input class="form-control" type="password" name="password" placeholder="Senha" autofocus required autocomplete='off'>
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
