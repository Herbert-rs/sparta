@extends('user.default', ['title' => 'Minhas vagas'])
@section('content-user')
    
    @if (count($candidatures) > 0)
        
        @foreach ($candidatures as $candidature)
        {{-- {{dd($candidature)}} --}}
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-form-subtitle contrast"> {{ $candidature->vacancy->profession->title }} </h3>
                    <p class="section-form-paragraph contrast" data-contrast-dark='{"font": "white"}' data-contrast-light='{"font": "#2a2a2a"}'>
                        <strong>Empresa:</strong> {{ $candidature->vacancy->company->name }}
                    </p>

                    <p class="section-form-paragraph contrast" data-contrast-dark='{"font": "white"}' data-contrast-light='{"font": "#2a2a2a"}'>
                        - <strong>Salário: </strong> {{ format_moeda( $candidature->vacancy->salary ) }} </br>
                        - <strong>Tipo de contratação:</strong> {{ $candidature->vacancy->hiring_type->description }} </br>
                        - <strong>Aceita remoto? </strong> {{ ($candidature->vacancy->building_remote) ? 'SIM' : 'NÃO' }} 
                    </p>

                    <p class="section-form-paragraph contrast" data-contrast-dark='{"font": "white"}' data-contrast-light='{"font": "#2a2a2a"}'>
                        <strong>Endereço:</strong> {{ $candidature->vacancy->building->full_address }}
                    </p>  
                    
                    <p class="section-form-paragraph contrast" data-contrast-dark='{"font": "white"}' data-contrast-light='{"font": "#2a2a2a"}'>
                        <strong>Candidatura enviada em:</strong> {{ format_datehour($candidature->created_at) }}
                    </p> 

                    <p class="section-form-paragraph contrast" data-contrast-dark='{"font": "white"}' data-contrast-light='{"font": "#2a2a2a"}'>
                        <strong>Vaga ativa? </strong> {!! as_check($candidature->vacancy->active) !!}
                    </p> 
                
                </div>
            </div>

            <hr>

        @endforeach

        <div class="row">
            <div class="col-md-12">
                {{ $candidatures->links() }}
            </div>
        </div>
    @else
        
        <p> Você não se candidatou para nenhuma vaga</p>

    @endif

@stop
