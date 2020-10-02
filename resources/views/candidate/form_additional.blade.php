<div class="form-group">
    <label for="avatar" class="control-label">Avatar</label>
    <input id="avatar"  class="form-control" type="file" name="avatar" placeholder="E-mail" autofocus  autocomplete='off'>
</div>

<div class="form-group">
    <label for="description" class="control-label">Descrição do perfil</label>
    <input id="description" class="form-control" type="text" name="description" placeholder="Empresa atua no ramo de abc desde 1900..." autofocus autocomplete='off' value="{{ isset($data->description) ? $data->description : '' }}">
</div>

<div class="form-group">
    <label for="curriculum" class="control-label">Curriculum  {!! isset($data->curriculum) ? "<a href=". Storage::url( $data->curriculum ). ">(Visualizar)</a>" : '' !!} </label>
    <input id="curriculum"  class="form-control" type="file" name="curriculum" placeholder="Anexe seu curriculum" autofocus  autocomplete='off'>
</div>

<div class="form-group">
    <label for="cid" class="control-label">Código do CID</label>
    <input id="cid" class="form-control" type="text" name="cid" placeholder="AA:31" maxlength="6" autofocus autocomplete='off' value="{{ isset($data->cid) ? $data->cid : '' }}">
</div>

<div class="form-group">
    <label for="disable_account" class="control-label">Desativar minha conta</label> </br>
    <a href="http://localhost:800/candidate/{{$data->candidate_id}}/status/disable" profile-id="{{$data->candidate_id}}" id="disable_account" class="btn btn-danger">Clique para confirmar</a>
</div>
