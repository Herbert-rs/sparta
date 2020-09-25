@extends('default')
@section('content-fluid')

    <section class="section-input contrast" data-contrast-dark='{"background": "#39104e", "font": "white"}' data-contrast-light='{"background": "#2a2a2a", "font": "#2a2a2a"}'>
        <form action=" " method="post"  >
            <label for="vacancy_search" class="section-input-title contrast" data-contrast-dark='{"font": "#f5f5f5"}' data-contrast-light='{"font": "#f5f5f5"}'> <i class="fa fa-search" aria-hidden="true"></i> Buscar Vagas</label>
            <div class="container-section-input contrast" data-contrast-dark='{"background": "#2a2a2a", "font": "#f5f5f5"}' data-contrast-light='{"background": "#f5f5f5", "font": "#2a2a2a"}'>
                <input id="vacancy_search" class="form-control input-lg" type="search" name=" " alt="Digite o título de alguma vaga, por exemplo, analista de sistemas" placeholder="Ex: Analista de sistemas, Gerente de projetos...">
                <button style="background: #104b7f;" aria-label="Clique para pesquisar vagas com o titulo digitado no campo ao lado" name="btn_search" type="submit" class="btn btn-md btn-info"> <i class="fa fa-search" aria-hidden="true"></i> Procurar</button>
            </div>
        </form>
    </section>

    <div class="row" style="margin-block-end: 20px;">
        <div class="col-md-12">
            <section class="section-form">
                <div class="col-md-3">

                    <div class="card">
                        <div class="card-body contrast" data-contrast-dark='{"background": "rgb(42, 42, 42)"}' data-contrast-light='{"background": "white"}'>
                            <div class="section-form-filtros">
                                <h2 class="card-title contrast" data-contrast-dark='{"font": "white"}' data-contrast-light='{"font": "#39104e"}'>Filtros</h2>
                                <div class="container-contrato">
                                    <h3 class="title-contrato contrast" data-contrast-dark='{"font": "white"}' data-contrast-light='{"font": "#39104e"}'>Tipo de Contrato</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row" style="padding: 0.5rem;">
                                                <div class="col-md-12">
                                                    <button aria-label="Clique para para filtrar vagas do tipo CLT" name="filter_contract_clt" class="btn btn-indigo btn-primary" type="submit" style=" width: 100%; ">CLT</button>
                                                </div>
                                            </div>

                                            <div class="row" style="padding: 0.5rem;">
                                                <div class="col-md-12">
                                                    <button aria-label="Clique para para filtrar vagas do tipo PJ" name="filter_contract_pj" class="btn btn-indigo btn-primary" type="submit" style=" width: 100%; ">PJ</button>
                                                </div>
                                            </div>

                                            <div class="row" style="padding: 0.5rem;">
                                                <div class="col-md-12">
                                                    <button aria-label="Clique para para filtrar vagas do tipo Estágio" name="filter_contract_estagio" class="btn btn-indigo btn-primary" type="submit" style=" width: 100%; ">Estágio</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container-contrato">
                                    <h3 class="title-contrato contrast" data-contrast-dark='{"font": "white"}' data-contrast-light='{"font": "#39104e"}'>Nível</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row" style="padding: 0.5rem;">
                                                <div class="col-md-12">
                                                    <button aria-label="Clique para para filtrar vagas do tipo Junior" name="filter_level_junior" class="btn btn-indigo btn-primary" type="submit" style=" width: 100%; ">Junior</button>
                                                </div>
                                            </div>

                                            <div class="row" style="padding: 0.5rem;">
                                                <div class="col-md-12">
                                                    <button aria-label="Clique para para filtrar vagas do tipo Pleno" name="filter_level_pleno" class="btn btn-indigo btn-primary" type="submit" style=" width: 100%; ">Pleno</button>
                                                </div>
                                            </div>

                                            <div class="row" style="padding: 0.5rem;">
                                                <div class="col-md-12">
                                                    <button aria-label="Clique para para filtrar vagas do tipo Senior" name="filter_level_senior" class="btn btn-indigo btn-primary" type="submit" style=" width: 100%; ">Senior</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container-input">
                                    <form action=" " method="post">
                                        <label class="contrast" for="search_vacancy" data-contrast-dark='{"font": "white"}' data-contrast-light='{"font": "#39104e"}'>Digite o nome da vaga</label>
                                        <div class="container-input-form">
                                            <input id="search_vacancy" style="border: 1px solid #161616;" alt="Digite o título de alguma vaga, por exemplo, analista de sistemas" placeholder="Ex: Estágio em marketing" type="text" class="form-control" name="search_vacancy">
                                            <button name="btn_search" aria-label="Clique aqui para realizar a pesquisa digitada no campo ao lado esquerdo" class="btn btn-info" type="submit"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">

                            @foreach ($vacancies as $vacancy)

                                <div class="card">
                                    <div class="card-header" style="background-color: #39104e;">
                                        <h4 class="card-title mb-0" style="color: white;">
                                            Empresa: {{ $vacancy->company->name }}
                                        </h4>
                                    </div>
                                    <div class="card-body border-top collapse show contrast" data-contrast-dark='{"background": "#2a2a2a"}' data-contrast-light='{"background": "white"}'>
                                        <div class="row">
                                            <a href={{ route('jobs.description','id='. $vacancy->vacancy_id) }}>
                                            <div class="section-form-content">
                                                <h3 class="section-form-subtitle contrast" data-contrast-dark='{"font": "white"}' data-contrast-light='{"font": "#2a2a2a"}'> {{ $vacancy->profession->title }} </h3>
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
                                                <a/>
                                                <p class="section-form-paragraph">
                                                    <button aria-label="Clique para enviar sua candidatura para a vaga" name="send_candidature" type="button" class="btn btn-success sendCandidature contrast" data-vacancy-title="{{ $vacancy->profession->title }}" data-vacancy-id="{{ $vacancy->vacancy_id }}" data-contrast-dark='{"background": "#0a4a0f", "font": "white"}' data-contrast-light='{"background": "#0a4a0f","font": "white"}'> <i class="fa fa-pencil" aria-hidden="true"></i> Candidatar</button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            {{ $vacancies->links() }}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@stop

@push('scripts')
    <script src="/js/custom/vacancy/list.js"></script>
@endpush
