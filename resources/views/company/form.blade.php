<div class="form-group">
    <label class="control-label">E-Mail</label>
    <input class="form-control" readonly value="{{ isset($data) ? $data->email : '' }}" type="email" name="email" placeholder="E-mail" autofocus required autocomplete='off'>
</div>

@if (!isset($data))
    <div class="form-group">
        <label class="control-label">Senha:</label>
        <input class="form-control" type="password" name="password" placeholder="Senha" autofocus required autocomplete='off'>
    </div> 
@endif

<div class="form-group">
    <label class="control-label">Nome da empresa:</label>
    <input class="form-control" value="{{ isset($data) ? $data->name : '' }}" type="text" name="name" placeholder="Nome" autofocus required autocomplete='off'>
</div>
<div class="form-group">
    <label class="control-label">Nome do contato responsável da Empresa</label>
    <input type="text" class="form-control" name="manager">
</div>
<div class="form-group">
    <label class="control-label">CNPJ</label>
    <input type="text" class="form-control" name="tax_id" onkeypress="$(this).mask('000.000.000-00');" placeholder="000.000.000-00">
</div>