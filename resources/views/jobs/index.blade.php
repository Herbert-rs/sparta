@extends('default')
@section('content-fluid')
    {{-- @include('customer.partials.select') --}}

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0"><i class="mdi mdi-account-card-details"></i> Exemplo de título </h4>
                </div>
                <div class="card-body border-top collapse show no-wrap">

                    <h4 class="card-title" id="1">Exemplo de sub-titulo</h4>
                    <p class="text-justify">
                        @for ($i = 0; $i < 5; $i++)
                            AMIGO ONDIESTA <br>
                            AMIGO ESTOAQUI <br> <br>
                        @endfor
                    </p>
                </div>
            </div>
        </div>
    </div>

@stop
