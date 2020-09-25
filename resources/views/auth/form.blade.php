<div class="form-group">
    <label class="control-label">E-mail:</label>
    <input class="form-control" type="text" name="email" placeholder="E-mail" autofocus required autocomplete='off'>
</div>
<div class="form-group">
    <label class="control-label">Senha:</label>
    <input class="form-control" type="password" name="password" placeholder="Senha" autofocus required autocomplete='off'>
</div>

@if ( $errors->has('email') || $errors->has('password') )
    <div class="alert alert-danger" role="alert">
        Usuário ou senha inválidos
    </div>
@endif