<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{!! asset('css/custom/styles.css') !!}" />
    <link rel="stylesheet" type="text/css" href="{!! asset('css/custom/reset.css') !!}" />
    @include('layouts.partials.css')
    <link rel="shortcut icon" href="{!! asset('img/rocket.ico') !!}"  />
    <title>Space Jobs</title>
</head>
<body>
    <div class="header contrast" data-contrast-dark='{"background": "black", "font": "#f5f5f5"}' data-contrast-light='{"background": "#f5f5f5", "font": "black"}' >
        <div class="logo contrast" data-contrast-dark='{"background": "black", "font": "#f5f5f5"}' data-contrast-light='{"background": "#f5f5f5", "font": "black"}'>
            <a href="index.html"><img alt="" src="{!! asset('img/logo-acme.png') !!}"/></a>
        </div>

        <div class="section-accessibility-options">
            <ul class="header-list-itens">
                <li class="header-list-accessibility">
                    <a type="button" id="shortcut-index" href="#" class="contrast" data-contrast-dark='{"font": "#fff"}' data-contrast-light='{"font": "indigo"}'> 
                        [ Página do usuário ALT+U ]
                    </a>
                </li>

                <li class="header-list-accessibility">
                    <a type="button" id="vlibras-button" href="#"> 
                        <img width="40px" src="https://vlibras.gov.br/app/assets/component-ac.png">
                    </a>
                </li>

                <li class="header-list-accessibility">
                    <a type="button" class="" href="#"> 
                        <img width="40px" src="https://www.flaticon.com/premium-icon/icons/svg/668/668286.svg">
                    </a>
                </li>

                <li class="header-list-accessibility">
                    <a type="button" id="contrast-dot-white" href="#"> </a>
                </li>

                <li class="header-list-accessibility">
                    <a type="button" id="contrast-dot-black" href="#"> </a>
                </li>

                <li class="header-list-accessibility">
                    <a type="button" id="shortcut-job" href="#" class="contrast" data-contrast-dark='{"font": "#fff"}' data-contrast-light='{"font": "indigo"}'> 
                        [ Buscar Vagas ALT+J ]
                    </a>
                </li>
            </ul>
        </div>

        <ul class="header-list-itens">
            <li class="header-list"><a class="section-button-header contrast" data-contrast-dark='{"background": "#fff", "font": "indigo"}' data-contrast-light='{"background": "indigo", "font": "#fff"}' href="#">VAGAS</a></li>
            <li class="header-list"><a class="section-button-header contrast" data-contrast-dark='{"background": "#fff", "font": "indigo"}' data-contrast-light='{"background": "indigo", "font": "#fff"}' href="#">PERFIL</a></li>
            <li class="header-list" id="icon"><a href="#"><img alt="" src="{!! asset('img/user.png') !!}"/></a></li>
        </ul>
    </div>
    <section class="section-input contrast" data-contrast-dark='{"background": "gray", "font": "#f5f5f5"}' data-contrast-light='{"background": "black", "font": "black"}'>
        <h1 class="section-input-title contrast" data-contrast-dark='{"font": "#f5f5f5"}' data-contrast-light='{"font": "#f5f5f5"}'>Buscar Vagas</h1>
        <form action=" " method="post"  >
            <div class="container-section-input contrast" data-contrast-dark='{"background": "black", "font": "#f5f5f5"}' data-contrast-light='{"background": "#f5f5f5", "font": "black"}'>
                <input class="section-input-input" type="search" name=" " alt="" >
                <a class="button-section-input contrast" data-contrast-dark='{"font": "white"}' data-contrast-light='{"font": "white"}' type="submit-section-input">Buscar</a>
            </div>
        </form>
    </section>
    <div class="row">
        <div class="col-md-12">
            <section class="section-form">
                <div class="col-md-3">
                    <div class="section-form-filtros contrast" data-contrast-dark='{"background": "black", "font": "#f5f5f5"}' data-contrast-light='{"background": "#f5f5f5", "font": "black"}'>
                        <div class="container-contrato contrast" data-contrast-dark='{"background": "black", "font": "#f5f5f5"}' data-contrast-light='{"background": "#f5f5f5", "font": "black"}'>
                            <h3 class="title-filtro">Filtros</h3>
                            <h3 class="title-contrato">Tipo de Contrato</h3>
                            <ul class="section-form-list-filtro">
                                <a class="button-list" href="#">CLT</a>
                                <a class="button-list" href="#">PJ</a>
                                <a class="button-list" href="#">Estágio</a>
                            </ul>
                        </div>
                        <div class="container-nivel contrast" data-contrast-dark='{"background": "black", "font": "#f5f5f5"}' data-contrast-light='{"background": "#f5f5f5", "font": "black"}'>
                            <h3 class="title-contrato">Nível</h3>
                            <ul class="section-form-list-filtro">
                                <a class="button-list" href="#">Júnior</a>
                                <a class="button-list" href="#">Pleno</a>
                                <a class="button-list" href="#">Sênior</a>
                            </ul>
                        </div>
                        <div class="container-input">
                            <form action=" " method="post">
                                <div class="container-input-form">
                                    <input type="search" class="search" name=" ">
                                    <a class="button-list" href="#" type="submit">Buscar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            @foreach ($vacancies as $vacancy)
                                <div class="section-form-vacancy contrast" data-contrast-dark='{"background": "black", "font": "#f5f5f5"}' data-contrast-light='{"background": "#f5f5f5", "font": "black"}'>
                                    <div class="content-tellium contrast" data-contrast-dark='{"background": "black", "font": "#f5f5f5"}' data-contrast-light='{"background": "#f5f5f5", "font": "black"}'>
                                        <h3 class="section-form-title"> Empresa: {{ $vacancy->company->name }} </h3>
                                        <div class="section-form-content">
                                            <h3 class="section-form-subtitle"> {{ $vacancy->profession->title }} </h3>
                                            <p class="section-form-paragraph">
                                                Atividades da vaga: {{ $vacancy->description }}
                                            </p>
                                        </div>
                                        <ul class="section-form-list">
                                            <li class="form-list">Campinas</li>
                                            <li class="form-list">PJ</li>
                                            <li class="form-list">Sênior</li>
                                        </ul>
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

    <div class="row">
        <div class="footer">
            <ul class="footer-list">
                <li class="li-facebook"><img  alt="" width="35px" height="35px" src="{!! asset('img/Facebook.png') !!}"/></li>
                <li class="li-twitter"><img alt="" width="35px" height="35px" src="{!! asset('img/Twitter.png') !!}"/></li>
                <li class="li-instagram"><img alt="" width="35px" height="35px" src="{!! asset('img/Instagram.png') !!}"/></li>
            </ul>
            <div class="logo-footer">
                <img id="img-footer" alt="" src="{!! asset('img/logo-acme.png') !!}" width="120px" height="50px"/>
            </div>
        </div>
    </div>
    
    <script src="/js/jquery/jquery.min.js"></script>

    @include('accessibility.vlibras')

    <!-- Bootstrap tether Core JavaScript -->
    <script src="/js/popper/popper.min.js"></script>
    <script src="/js/bootstrap/bootstrap.min.js"></script>

    {{-- ## Feramentas de acessibilidade --}}

    {{-- VLibras --}}
    <script src="/js/vlibras/vlibras-plugin.js"></script>
    <script src="/js/vlibras/launcher.js"></script>

    {{-- Mouse Trap --}}
    <script src="/js/mousetrap/mousetrap.min.js"></script>
    <script src="/js/mousetrap/mousetrap-shortcuts.js"></script>

    {{-- Contrast --}}
    <script src="/js/contrast/contrast.js"></script>

    @toastr_js
    @toastr_render

    @stack ('scripts')

</body>
</html>
