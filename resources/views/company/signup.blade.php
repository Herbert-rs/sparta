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
<section class="singup-company-content">
    <div>
        <h1>Cadastre-se como Empresa</h1>
        <div class="singup-box">
            <form class="singup-form" method="post" action="/company/signup">
                @csrf
                <h3 class="singup-head"><i class="fa fa-lg fa-fw fa-user"></i>Cadastre-se</h3>
                <div class="form-group">
                    <label class="control-label">Nome:</label>
                    <input class=form-control" type="text" name="name" placeholder="Nome" autofocus required autocomplete='off'>
                </div>
                <div class="form-group">
                    <label for="imagem">Imagem de perfil:</label>
                    <input type="file" name="avatar" >
                </div>
                <div class="form-group">
                    <label class="control-label">Descrição</label>
                    <input type="text" class="form-control" name="description">
                </div>
                <div class="form-group">
                    <label class="control-label">E-mail</label>
                    <input type="text" class="form-control" name="email">
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
                    <label class="control-label">Telefone</label>
                    <label>
                        <input type="text" class="form-control" name="phone" placeholder="(00) 0000-0000">
                    </label>
                </div>
                <div class="form-group">
                    <label class="control-label">Celular</label>
                    <label>
                        <input type="text" class="form-control"  name="mobile" placeholder="(00) 00000-0000">
                    </label>
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>
@stop
