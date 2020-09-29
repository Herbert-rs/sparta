<div class="form-group">
    <label for="avatar" class="control-label">Avatar</label>
    <input id="avatar"  class="form-control" type="file" name="avatar"  autofocus  autocomplete='off'>
</div>

<div class="form-group">
    <label for="description" class="control-label">Descrição do perfil</label>
    <input id="description" class="form-control" type="text" name="description" placeholder="Empresa atua no ramo de abc desde 1900..." autofocus autocomplete='off' value="{{ isset($data->description) ? $data->description : '' }}">
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