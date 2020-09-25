@extends('default')
@section('content-fluid')
    @foreach ($jobs as $vacancy)
    <section class="section-input contrast" data-contrast-dark='{"background": "#39104e", "font": "white"}' data-contrast-light='{"background": "#2a2a2a", "font": "#2a2a2a"}'>
        <form action=" " method="post"  >
            <label for="vacancy_search" class="section-input-title contrast" data-contrast-dark='{"font": "#f5f5f5"}' data-contrast-light='{"font": "#f5f5f5"}'> {{ $vacancy->profession->title }}</label>
        </form>
    </section>


    <div class="row" style="margin-block-end: 20px;">
        <div class="col-md-12">
            <section class="section-form">
                <div class="col-md-3">



                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">

                                <div class="card">
                                    <div class="card-header" style="background-color: #39104e;">
                                        <h2 class="card-title mb-0" style="color: white;">
                                            Empresa: {{ $vacancy->company->name }}
                                        </h2>
                                    </div>
                                    <div class="card-body border-top collapse show contrast" data-contrast-dark='{"background": "#2a2a2a"}' data-contrast-light='{"background": "white"}'>
                                        <div class="row">
                                            <div class="section-form-content">
                                                <p class="section-form-paragraph contrast" data-contrast-dark='{"font": "white"}' data-contrast-light='{"font": "#2a2a2a"}'>
                                                    <strong>Descrição da Vaga:</strong> {{ $vacancy->description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@stop
