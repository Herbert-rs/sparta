@extends('default')
@include('layouts.partials.form')
@section('content-fluid')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['route' => 'building.store', 'method' => 'POST', 'class' => 'form form-horizontal', 'enctype'=>'multipart/form-data']) !!}
                    <div class="row">
                        <div class="col-md-4">
                            @field([
                                'type'      => 'text',
                                'name'      => 'name',
                                'value'     => null,
                                'label'     => 'Descrição',
                                'required'  => 'required'
                            ])
                        </div>
                        <div class="col-md-3">
                            @field([
                                'type'              => 'text',
                                'name'              => 'bmail_code',
                                'value'             => null,
                                'label'             => 'CEP',
                                'pre_input_addon'   => '<button type="button" class="btn btn-info" id="search_mail_code"><i class="fa fa-search"></i> Buscar CEP</button>',
                                'required'          => 'required'
                            ])
                        </div>
                        <div class="col-md-1">
                            @field([
                                'type'      => 'text',
                                'name'      => 'bstate',
                                'value'     => null,
                                'label'     => 'Estado',
                                'readonly'  => 'readonly'
                            ])
                        </div>
                        <div class="col-md-4">
                            @field([
                                'type'      => 'text',
                                'name'      => 'bcity',
                                'value'     => null,
                                'label'     => 'Cidade',
                                'readonly'  => 'readonly'
                            ])
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            @field(['type' => 'select','name' => 'bstreet_type','value' => null,'label' => 'Tipo','options' => $types,'readonly' => 'readonly'])
                        </div>
                        <div class="col-md-5">
                            @field(['type' => 'text','name' => 'bstreet_name','value' => null,'label' => 'Endereço','readonly' => 'readonly'])
                        </div>
                        <div class="col-md-2">
                            @field(['type' => 'text','name' => 'bstreet_number','value' => null,'label' => 'Número','required' => 'required'])
                        </div>
                        <div class="col-md-2">
                            {!! Form::label('', '') !!}
                            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-plus-circle"></i> Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <legend>Endereços existentes</legend>
                    <table class="table table-striped table-hover" id="buildingTable" data-table-sort="true">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>CEP</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($buildings as $building)
                            <tr>
                                <td>{{ $building->bstreet_type }} {{ $building->bstreet_name }}, {{ $building->bstreet_number }}</td>
                                <td>{{ $building->bmail_code }}</td>
                                <td>{{ $building->bcity }}</td>
                                <td>{{ $building->bstate }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <script type="text/javascript">

        function validaNumero(numero)
        {
            var re = /\d{1,5}[A-Za-z]{0,1}|[Ss][\/][nN]|[Kk][Mm][ ]{0,1}\d{1,4}[,]{0,1}\d{0,2}/;
            if(numero!='')
            {
                if (!re.test(numero))
                {
                    swal({
                        title: 'Número inválido. Favor corrigir!',
                        html: 'Padrões aceitos: km 143,3 <br> S/N <br> 12345 <br> 123E',
                        showCancelButton: false,
                    });
                }

            }
        }

        $(function () {

            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
            $("#bmail_code").inputmask("99999-999");

            $('#search_mail_code').on( "click", function() {

                var mail_code = $("#bmail_code").val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: '{!! URL::route('building.searchByCep') !!}',
                    type: "POST",
                    data: {
                        'bmail_code': mail_code,
                        '_token': '{!! csrf_token() !!}'
                    },
                    success: function (data) {

                        $('#bstreet_type').val(data['street_type']);
                        $('#bstate').val(data['state']);
                        $('#bcity').val(data['city']);
                        $('#bstreet_name').val(data['name']);

                    },
                    error: function () {

                    }
                })
            });
        });
    </script>


@stop

