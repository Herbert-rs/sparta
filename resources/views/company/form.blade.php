<div class="form-group">
    <label for="email" class="control-label">E-Mail</label>
    <input class="form-control" value="{{ isset($data) ? $data->email : ''}}" {!! isset($data->email) ? 'readonly style="background-color: black; color: white"' : '' !!} type="email" name="email" placeholder="E-mail" id="email" autofocus required autocomplete='off'>
</div>

<div class="form-group">
    <label for="password" class="control-label">Senha:</label>
    <input id="password" class="form-control" type="password" name="password" placeholder="Digite sua senha..." autofocus autocomplete='off' {!! isset($data->email) ? '' : 'required' !!}>
</div> 

<div class="form-group">
    <label for="name" class="control-label">Nome da empresa:</label>
    <input id="name" class="form-control" required value="{{ isset($data) ? $data->name : '' }}" type="text" name="name" placeholder="Nome" autofocus required autocomplete='off'>
</div>
<div class="form-group">
    <label for="manager" class="control-label">Nome do contato responsável da Empresa</label>
    <input id="manager" type="text" class="form-control" required value="{{ isset($data) ? $data->manager : '' }}" name="manager">
</div>
<div class="form-group">
    <label for="tax_id" class="control-label">CNPJ</label>
    <input id="tax_id" type="text" class="form-control" required value="{{ isset($data) ? $data->tax_id : '' }}" name="tax_id" onkeypress="$(this).mask('000.000.000-00');" placeholder="000.000.000-00">
</div>