@extends('default')
@section('content-fluid')

    <section class="section-input contrast" data-contrast-dark='{"background": "#39104e", "font": "white"}'
             data-contrast-light='{"background": "#2a2a2a", "font": "#2a2a2a"}'>
        <form action=" " method="post">
            <label for="vacancy_search" class="section-input-title contrast" data-contrast-dark='{"font": "#f5f5f5"}'
                   data-contrast-light='{"font": "#f5f5f5"}'> <i class="fa fa-search" aria-hidden="true"></i> Buscar
                Vagas</label>
            <div class="container-section-input contrast"
                 data-contrast-dark='{"background": "#2a2a2a", "font": "#f5f5f5"}'
                 data-contrast-light='{"background": "#f5f5f5", "font": "#2a2a2a"}'>
                <input id="vacancy_search" class="form-control input-lg" type="search" name=" "
                       alt="Digite o título de alguma vaga, por exemplo, analista de sistemas"
                       placeholder="Ex: Analista de sistemas, Gerente de projetos...">
                <button style="background: #104b7f;"
                        aria-label="Clique para pesquisar vagas com o titulo digitado no campo ao lado"
                        name="btn_search" type="submit" class="btn btn-md btn-info"><i class="fa fa-search"
                                                                                       aria-hidden="true"></i> Procurar
                </button>
            </div>
        </form>
    </section>
    @foreach ($jobs as $vacancy)
        <div class="wrapper-header-job-show background-blue text-center">
            <div class="container">

                <p class="color-white"></p>
                <h1>{{ $vacancy->profession->title }}</h1>
            </div>
        </div>
        <div class="container">
            <br>
            <div class="row">
                <div class="col-md-9">
                    <div class="wrapper-content-job-show">

                        <h2>{{ $vacancy->company->name }}</h2>

                        <div class="wrapper-details-job-show">
                            <div class="row">
                                <div class="col-sm-5 col-md-3">
                                    <div class="text-center">
                                        <img
                                            src="https://programathor.com.br/assets/company_avatar-d1dce866939c838eba0b8ca892cc73cd59f7616fa1efaeb2e3596cb242fe3d77.png"
                                            alt="Razviti Soluções Tecnológicas LTDA" class="width-130-px">
                                    </div>
                                </div>
                                <div class="col-md-7 col-md-9">

                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p>
                                                <i class="far fa-file-alt"></i>
                                            {{ $vacancy->hiring_type->description }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <p><i class="fas fa-map-marker-alt"></i> Endereço:
                                                {{ $vacancy->building->full_address }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <p>
                                                <i class="fa fa-globe"></i>Remoto:
                                                {{ ($vacancy->building_remote) ? 'SIM' : 'NÃO' }}
                                            </p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p><i class="far fa-money-bill-alt"></i> Salário:
                                                {{ format_moeda( $vacancy->salary ) }}
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3>Descrição da empresa</h3>
                        <p>
                        <p>{{$vacancy->company->description }}</p>
                        <h3>Atividades e Responsabilidades</h3>
                        <p>
                        {{ $vacancy->description }}
                        <p>

                        </p></p>
                        <h3>Requisitos</h3>
                        <p>
                            {{$vacancy->profession->description }}
                        </p>


                        @endforeach
                        <div class="col-md-3">
                            <br><br>
                        </div>
                    </div>
                </div>
@stop
