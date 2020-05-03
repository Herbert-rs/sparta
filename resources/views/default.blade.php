@include('layouts.header')
    <body class="fix-header fix-sidebar card-no-border">

        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>

        <div id="main-wrapper">
            {{-- Painel de usuário --}}
            @if(1==1)
                @include('user.default')
            {{-- Busca de vagas --}}
            @else
                @include('jobs.default')
            @endif
        </div>

        @include('accessibility.vlibras')

    @include('layouts.partials.js')

    </body>

</html>
