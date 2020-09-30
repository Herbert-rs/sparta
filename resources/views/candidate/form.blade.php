<div class="form-group">
    <label class="control-label">E-Mail</label>
    <input class="form-control" value="{{ isset($data) ? $data->email : ''}}" {!! isset($data->email) ? 'readonly' : '' !!} type="email" name="email" placeholder="E-mail" autofocus required autocomplete='off'>
</div>    
<div class="form-group">
    <label class="control-label">Senha:</label>
    <input class="form-control" type="password" name="password" placeholder="Digite sua senha..." autofocus autocomplete='off' {!! isset($data->email) ? '' : 'required' !!}>
</div>            
<div class="form-group">
    <label class="control-label">Nome:</label>
    <input class="form-control" required value="{{ isset($data) ? $data->name : '' }}" type="text" name="name" placeholder="Nome" autofocus required autocomplete='off'>
</div>
<div class="form-group">
    <label class="control-label">CPF/CNPJ</label>
    <input type="text" value="{{ isset($data) ? $data->tax_id : '' }}" required class="form-control" name="tax_id" placeholder="000.000.000-00">
</div>
<div class="form-group">
    <label class="control-label">Celular</label>
    <input type="text" required value="{{ isset($data) ? $data->mobile : '' }}"class="form-control cel-sp-mask" name="mobile" placeholder="(00) 00000-0000">
</div>