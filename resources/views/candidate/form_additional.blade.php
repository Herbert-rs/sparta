<div class="form-group">
    <label for="avatar" class="control-label">Avatar</label>
    <input id="avatar"  class="form-control" type="file" name="email" placeholder="E-mail" autofocus  autocomplete='off'>
</div>

<div class="form-group">
    <label for="description" class="control-label">Descrição do perfil</label>
    <input id="description" class="form-control" type="text" name="description" placeholder="Empresa atua no ramo de abc desde 1900..." autofocus autocomplete='off' value="{{ isset($data->description) ? $data->description : '' }}">
</div> 

<div class="form-group">
    <label for="curriculum" class="control-label">Curriculum <a href="http://">(Visualizar)</a> </label>
    <input id="curriculum"  class="form-control" type="file" name="curriculum" placeholder="Anexe seu curriculum" autofocus  autocomplete='off'>
</div> 

<div class="form-group">
    <label for="cid" class="control-label">Código do CID</label>
    <input id="cid" class="form-control" type="text" name="cid" placeholder="AA:31" maxlength="6" autofocus autocomplete='off' value="{{ isset($data->cid) ? $data->cid : '' }}">
</div> 

<div class="form-group">
    <label for="disable_account" class="control-label">Desativar minha conta</label> </br>
    <button id="disable_account" class="btn btn-danger">Clique para confirmar</button>
</div> 