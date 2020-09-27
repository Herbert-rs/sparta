@extends('user.default', ['title' => 'Minhas vagas'])
@section('content-user')
    
    @if (count($vacancies) > 0)
        <div class="row">
            @foreach ($vacancies as $vacancy)
                <div class="col-lg-4">
                    <!-- Column -->
                    <div class="card"> 
                        {{-- <img src="{{ asset('img/background/profile-bg.jpg') }}" alt="Card image cap" class="profile-bg-height  w-100 rounded-top"> --}}
                        <div class="card-body little-profile text-center">
                            {{-- <div class="pro-img"><img src="{{ asset('img/user/4.jpg') }}" alt="user" class="rounded-circle shadow-sm" width="128"></div> --}}
                            <h3 class="mb-0"> {{ $vacancy->profession->title }} </h3>
                            <p> Atualizado em: {{ format_datehour($vacancy->updated_at) }} </p>
                            <p><small> Atividades da vaga: {{ $vacancy->description }} </small></p>
                            <p> Tipo de contratação: {{ $vacancy->hiring_type->description }} </p>
                            <p><small> {{ $vacancy->building->full_address }} </small></p>
                            <a href="javascript:void(0)" class="mt-1 waves-effect waves-dark btn btn-primary btn-md btn-rounded"> <i class="fas fa-pencil-alt"></i> Modificar</a>
                            <a href="{{route('user.vacancy.candidates', $vacancy->vacancy_id)}}" class="mt-1 waves-effect waves-dark btn btn-primary btn-md btn-rounded"> <i class="fas fa-eye"></i> Candidatos</a>
                            <div class="row text-center mt-3 justify-content-center">
                                <div class="col-6 col-md-4 mt-3">
                                    <h3 class="mb-0 font-weight-light">1099</h3><small>Candidaturas</small>
                                </div>
                                <div class="col-6 col-md-4 mt-3">
                                    <h3 class="mb-0 font-weight-light">R$ {{ format_moeda( $vacancy->salary ) }}</h3><small>Salário</small>
                                </div>
                                <div class="col-6 col-md-4 mt-3">
                                    <h3 class="mb-0 font-weight-light"> {!! as_check($vacancy->building_remote) !!} </h3><small>Aceita remoto?</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-12">
                {{ $vacancies->links() }}
            </div>
        </div>
    @else
        
        <p> Não existem vagas cadastradas</p>

    @endif

@stop
