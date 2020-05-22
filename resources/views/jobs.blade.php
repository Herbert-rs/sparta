<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{!! asset('css/custom/styles.css') !!}" />
    <link rel="stylesheet" type="text/css" href="{!! asset('css/custom/reset.css') !!}" />
    <link rel="shortcut icon" href="{!! asset('img/rocket.ico') !!}"  />
    <title>ACME</title>
</head>
<body>
<div class="header" data-contrast-dark='{"background": "black", "font": "white"}' data-contrast-light='{"background": "white", "font": "black"}' >
    <div class="logo" data-contrast-dark='{"background": "black", "font": "white"}' data-contrast-light='{"background": "white", "font": "black"
    }'><a href="index.html"><img alt="" src="{!! asset('img/logo-acme.png') !!}"/></a></div>
    <ul class="header-list-itens">
        <li class="header-list"><a href="#">PORTIFOLIO</a></li>
        <li class="header-list"><a href="#">TEAM</a></li>
        <li class="header-list"><a href="#">CONTACT</a></li>
        <li class="header-list" id="icon"><a href="#"><img alt="" src="{!! asset('img/user.png') !!}"/></a></li>
    </ul>
</div>
<section class="section-input" >
    <h1 class="section-input-title">Buscar Vagas</h1>
    <form action=" " method="post"  >
        <div  class="container-section-input" data-contrast-dark='{"background": "black", "font": "white"}' data-contrast-light='{"background": "white", "font": "black"}'>
            <input class="section-input-input" type="search" name=" " alt="" >
            <a class="button-section-input" type="submit-section-input">Buscar</a>
        </div>
    </form>
</section>
<section class="section-form">
    <div class="section-form-filtros" data-contrast-dark='{"background": "black", "font": "white"}' data-contrast-light='{"background": "white", "font": "black"}'>
        <div class="container-contrato" data-contrast-dark='{"background": "black", "font": "white"}' data-contrast-light='{"background": "white", "font": "black"}'>
            <h3 class="title-filtro">Filtros</h3>
            <h3 class="title-contrato">Tipo de Contrato</h3>
            <ul class="section-form-list-filtro">
                <a class="button-list" href="#">CLT</a>
                <a class="button-list" href="#">PJ</a>
                <a class="button-list" href="#">STAG</a>
            </ul>
        </div>
        <div class="container-nivel" data-contrast-dark='{"background": "black", "font": "white"}' data-contrast-light='{"background": "white", "font": "black"}'>
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
            <form action=" " method="post">
                <div class="container-input-form">
                    <input type="search" class="search" name=" ">
                    <a class="button-list" href="#" type="submit">Buscar</a>
                </div>
            </form>
        </div>
    </div>
    <div class="section-form-tellium" data-contrast-dark='{"background": "black", "font": "white"}' data-contrast-light='{"background": "white", "font": "black"}'>
        <h3 class="section-form-title">IBM</h3>
        <div class="section-form-content">
            <h3 class="section-form-subtitle">Lorem ipsum</h3>
            <p class="section-form-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
        <ul class="section-form-list">
            <li class="form-list">São Paulo</li>
            <li class="form-list">CLT</li>
            <li class="form-list">Júnior</li>
        </ul>
    </div>

    <div class="section-form-tellium" data-contrast-dark='{"background": "black", "font": "white"}' data-contrast-light='{"background": "white", "font": "black"}'>
        <div class="content-tellium" data-contrast-dark='{"background": "black", "font": "white"}' data-contrast-light='{"background": "white", "font": "black"}'>
            <h3 class="section-form-title">Tellium</h3>
            <div class="section-form-content">
                <h3 class="section-form-subtitle">Lorem ipsum</h3>
                <p class="section-form-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
            <ul class="section-form-list">
                <li class="form-list">Campinas</li>
                <li class="form-list">PJ</li>
                <li class="form-list">Sênior</li>
            </ul>
        </div>
    </div>
</section>

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
</body>
</html>
