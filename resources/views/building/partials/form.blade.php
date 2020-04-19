    <h4 class="card-title"> <i class="fa fa-location-arrow"></i> Endereço</h4>
    <hr>
    <div class="row">
        <div class="col-md-5">
            @field([
                'type'                => 'text',
                'name'                => 'building[bmail_code]',
                'value'               => isset($building->bmail_code) ? $building->bmail_code : '',
                'label'               => 'CEP',
                'pre_input_addon'     => "<button type='button' class='btn btn-info' id='search_mail_code'><i id='searchMailCode' class='fa fa-search'></i> Buscar CEP</button>",
                'required'            => 'required',
                'extra_field_options' => [
                    'maxlength'         => '9',
                    "data-inputmask"    => "'mask':'99999-999'"
                ]
            ])
        </div>
        <div class="col-md-2">
            @field([
                'type'      => 'text',
                'name'      => 'building[bstate]',
                'value'     => isset($building->bstate) ? $building->bstate : '',
                'label'     => 'Estado',
                'required'  => 'required',
                'readonly'  => 'readonly'
            ])
        </div>
        <div class="col-md-5">
            @field([
                'type'      => 'text',
                'name'      => 'building[bcity]',
                'value'     => isset($building->bcity) ? $building->bcity : '',
                'label'     => 'Cidade',
                'readonly'  => 'readonly'
            ])
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            {{-- @field(['type' => 'select','name' => 'bstreet_type','value' => null,'label' => 'Tipo','options' => $types,'readonly' => 'readonly']) --}}
            @field([
                'type' => 'text',
                'name' => 'building[bstreet_type]',
                'value' => isset($building->bstreet_type) ? $building->bstreet_type : '',
                'label' => 'Tipo',
                'readonly' => 'readonly'
            ])
        </div>
        <div class="col-md-4">
            @field([
                'type' => 'text',
                'name' => 'building[bstreet_name]',
                'value' => isset($building->bstreet_name) ? $building->bstreet_name : '',
                'label' => 'Endereço',
                'readonly' => 'readonly'
            ])
        </div>
        <div class="col-md-2">
            @field([
                'type' => 'text',
                'name' => 'building[bstreet_number]',
                'value' => isset($building->bstreet_number) ? $building->bstreet_number : '',
                'label' => 'Número',
                'required' => 'required'
            ])
        </div>
        <div class="col-md-4">
            @field([
                'type' => 'text',
                'name' => 'building[building_suffix]',
                'value' => isset($building_suffix) ? $building_suffix : '',
                'label' => 'Complemento'
            ])
        </div>
    </div>
