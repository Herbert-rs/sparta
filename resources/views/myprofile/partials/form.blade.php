<section>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            @field([
                'type'      => 'text',
                'readonly'  => 'readonly',
                'name'      => 'email',
                'value'     => $contact->email,
                'label'     => 'Email',
                'required'  => ''
            ])
        </div>

        <div class="col-sm-12 col-md-6 {{ ($errors->has('name') ? 'has-error' : '') }}">
            @field([
                'type'      => 'text',
                'readonly'  => '',
                'name'      => 'name',
                'value'     => isset($contact->name) ? $contact->name : '',
                'label'     => 'Nome',
                'required'  => 'required'
            ])
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-3 {{ ($errors->has('gender') ? 'has-error' : '') }}">
            @field([
                'type'      => 'select',
                'name'      => 'gender',
                'label'     => "Sexo",
                'value'     => ($contact->gender ?? '1'),
                'options'   => [
                    '1' => 'Masculino', '0' => 'Feminino'
                ]
            ])
        </div>

        <div class="col-sm-12 col-md-3" {{ ($errors->has('birthday') ? 'has-error' : '') }}>
            @field([
                'type'                  => 'text',
                'readonly'              => '',
                'name'                  => 'birthday',
                'value'                 => isset($contact->birthday) ? format_system_date($contact->birthday) : '',
                'label'                 => 'Nascimento',
                'required'              => '',
                'extra_field_options'   => [
                    "data-inputmask" => "'mask':'99/99/9999'"
                ]
            ])
        </div>

        <div class="col-sm-12 col-md-3 {{( $errors->has('tax_id1') ? 'has-error' : '') }}">
            @field([
                'type'                  => 'text',
                'readonly'              => '',
                'name'                  => 'tax_id1',
                'value'                 => isset($contact->tax_id1) ? $contact->tax_id1 : '',
                'label'                 => 'CPF',
                'required'              => '',
                'extra_field_options'   => [
                    "data-inputmask" => "'mask':'999.999.999-99'"
                ]
            ])
        </div>

        <div class="col-sm-12 col-md-3 {{( $errors->has('position') ? 'has-error' : '') }}">
            @field([
                'type'      => 'text',
                'readonly'  => '',
                'name'      => 'position',
                'value'     => isset($contact->position) ? $contact->position : '',
                'label'     => 'Cargo',
                'required'  => ''
            ])
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-2 {{ ($errors->has('phone1') ? 'has-error' : '') }}">
            @field([
                'type'                => 'text',
                'readonly'            => '',
                'name'                => 'phone1',
                'value'               => isset($contact->phone1) ? $contact->phone1 : '',
                'label'               => 'Telefone',
                'required'            => '',
                'extra_field_options' =>[
                    "data-inputmask" => "'mask':'(99) 9999-9999'"
                ]
            ])
        </div>

        <div class="col-sm-12 col-md-8 col-lg-2 {{ ($errors->has('phone1_ext') ? 'has-error' : '') }}">
            @field([
                'type'      => 'text',
                'readonly'  => '',
                'name'      => 'phone1_ext',
                'value'     => isset($contact->phone1_ext) ? $contact->phone1_ext : '',
                'label'     => 'Compl.',
                'required'  => ''
            ])
        </div>

        <div class="col-sm-12 col-md-4 col-lg-2 {{ ($errors->has('phone2') ? 'has-error' : '') }}">
            @field([
                'type'                  => 'text',
                'readonly'              => '',
                'name'                  => 'phone2',
                'value'                 => isset($contact->phone2) ? $contact->phone2 : '',
                'label'                 => 'Telefone 2',
                'required'              => '',
                'extra_field_options'   => [
                    "data-inputmask" => "'mask':'(99) 9999-9999'"
                ]
            ])
        </div>

        <div class="col-sm-12 col-md-8 col-lg-2 {{ ($errors->has('phone2_ext') ? 'has-error' : '') }}">
            @field([
                'type'      => 'text',
                'readonly'  => '',
                'name'      => 'phone2_ext',
                'value'     => isset($contact->phone2_ext) ? $contact->phone2_ext : '',
                'label'     => 'Compl.',
                'required'  => ''
            ])
        </div>


        <div class="col-sm-12 col-md-4 col-lg-2 {{ ($errors->has('mobile') ? 'has-error' : '') }}">
            @field([
                'type'                => 'text',
                'readonly'            => '',
                'name'                => 'mobile',
                'value'               => isset($contact->mobile) ? $contact->mobile : '',
                'label'               => 'Celular',
                'required'            => '',
                'extra_field_options' => [
                    "data-inputmask" => "'mask':'(99) 99999-9999'"
                ]
            ])
        </div>

        <div class="col-sm-12 col-md-8 col-lg-2 {{ ($errors->has('mobile_ext') ? 'has-error' : '') }}">
            @field([
                'type'      => 'text',
                'readonly'  => '',
                'name'      => 'mobile_ext',
                'value'     => isset($contact->mobile_ext) ? $contact->mobile_ext : '',
                'label'     => 'Compl.',
                'required'  => ''
            ])
        </div>
    </div>
</section>

<script type="text/javascript">
    $(function () {
        $(":input").inputmask();
    });
</script>
