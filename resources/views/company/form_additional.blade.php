<div class="form-group">
    <label for="avatar" class="control-label">Avatar</label>
    {{-- <input id="email"  class="form-control" value="{{ isset($data) ? $data->email : ''}}" {!! isset($data->email) ? 'readonly style="background-color: black; color: white"' : '' !!} type="email" name="email" placeholder="E-mail" autofocus required autocomplete='off'> --}}
    <input id="avatar"  class="form-control" type="file" name="email" placeholder="E-mail" autofocus required autocomplete='off'>
</div>

<div class="form-group">
    <label for="description" class="control-label">Descrição do perfil</label>
    <input id="description" class="form-control" type="text" name="description" placeholder="Digite sua senha..." autofocus autocomplete='off' value="{{ isset($data->description) ? $data->description : '' }}">
</div> 

<div class="form-group">
    <label for="phone" class="control-label">Telefone (DDD + N°)</label>
    <input id="phone" class="form-control" type="text" name="phone" placeholder="1199999999" maxlength="10" autofocus autocomplete='off' value="{{ isset($data->phone) ? $data->phone : '' }}">
</div> 

<div class="form-group">
    <label for="mobile" class="control-label">Celular (DDD + N°)</label>
    <input id="mobile" class="form-control" type="text" name="mobile" placeholder="1199999999" maxlength="11" autofocus autocomplete='off' value="{{ isset($data->mobile) ? $data->mobile : '' }}">
</div> 

<div class="form-group">
    <label for="disable_account" class="control-label">Desativar minha conta</label> </br>
    <button id="disable_account" class="btn btn-danger">Clique para confirmar</button>
    {{-- <a href="/teste" id="disable_account" class="form-control">Desativar conta</a> --}}
</div> 