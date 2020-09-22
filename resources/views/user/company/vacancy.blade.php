@extends('user.default', ['title' => 'Minhas vagas'])
@section('content-user')
    
    @if (count($vacancies) > 0)
        
        @foreach ($vacancies as $vacancy)
            
            {{-- {{dd($vacancy)}} --}}
            <div class="row">
                <div class="col-md-12">
                    <a href=" {{ route('user.index') }} "> <h3 class="section-form-subtitle contrast"> <i class="fas fa-pencil-alt"></i> {{ $vacancy->profession->title }} </h3> </a>
                    <p class="section-form-paragraph contrast" data-contrast-dark='{"font": "white"}' data-contrast-light='{"font": "#2a2a2a"}'>
                        <strong>Atividades da vaga:</strong> {{ $vacancy->description }}
                    </p>

                    <p class="section-form-paragraph contrast" data-contrast-dark='{"font": "white"}' data-contrast-light='{"font": "#2a2a2a"}'>
                        - <strong>Salário: </strong> {{ format_moeda( $vacancy->salary ) }} </br>
                        - <strong>Tipo de contratação:</strong> {{ $vacancy->hiring_type->description }} </br>
                        - <strong>Aceita remoto? </strong> {{ ($vacancy->building_remote) ? 'SIM' : 'NÃO' }} 
                    </p>

                    <p class="section-form-paragraph contrast" data-contrast-dark='{"font": "white"}' data-contrast-light='{"font": "#2a2a2a"}'>
                        <strong>Endereço:</strong> {{ $vacancy->building->full_address }}
                    </p>                
                
                </div>
            </div>

            <hr>

        @endforeach

    @else
        
        <p> Não existem vagas cadastradas</p>

    @endif

@stop
