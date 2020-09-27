<div class="form-group">
    <label class="control-label">E-Mail</label>
    <input class="form-control" value="{{ isset($data) ? $data->email : ''}}" {!! isset($data->email) ? 'readonly' : '' !!} type="email" name="email" placeholder="E-mail" autofocus required autocomplete='off'>
</div>

<div class="form-group">
    <label class="control-label">Senha:</label>
    <input class="form-control" type="password" name="password" placeholder="Digite sua senha..." autofocus autocomplete='off' {!! isset($data->email) ? '' : 'required' !!}>
</div> 

<div class="form-group">
    <label class="control-label">Nome da empresa:</label>
    <input class="form-control" required value="{{ isset($data) ? $data->name : '' }}" type="text" name="name" placeholder="Nome" autofocus required autocomplete='off'>
</div>
<div class="form-group">
    <label class="control-label">Nome do contato responsável da Empresa</label>
    <input type="text" class="form-control" required value="{{ isset($data) ? $data->manager : '' }}" name="manager">
</div>
<div class="form-group">
    <label class="control-label">CNPJ</label>
    <input type="text" class="form-control" required value="{{ isset($data) ? $data->tax_id : '' }}" name="tax_id" onkeypress="$(this).mask('000.000.000-00');" placeholder="000.000.000-00">
</div>