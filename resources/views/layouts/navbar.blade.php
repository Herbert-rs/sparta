<header class="topbar contrast" data-contrast-dark='{"background": "#2a2a2a", "font": "white"}' data-contrast-light='{"background": "#39104e", "font": "#2a2a2a"}'>
    <nav class="navbar top-navbar navbar-expand-md navbar-light">

        <div class="navbar-header">
            {{-- <a class="navbar-brand" href=""> --}}
                {{-- <img width="40" height="40" src="{!! asset('img/logo-acme.png') !!}" class="light-logo" alt="homepage" /> --}}
                <span style="navbar-brand">
                   <img width="55%" alt="" src="{!! asset('img/logo_branco.png') !!}"/>
                </span>
            {{-- </a> --}}
        </div>

        <div class="navbar-collapse">

            <ul class="navbar-nav mr-auto mt-md-0 accessibility-buttons">

                <div class="section-accessibility-options">
                    <ul class="header-list-itens">
                        <li class="header-list-accessibility">
                            <a type="button" id="shortcut-index" href="#" class="header-link contrast" data-contrast-dark='{"font": "#fff"}' data-contrast-light='{"font": "white"}'> 
                                [Usuário ALT+U]
                            </a>
                        </li>
        
                        <li class="header-list-accessibility">
                            <a type="button" id="vlibras-button" href="#"> 
                                <img alt="Clique nesta imagem para abrir o componente VLibras" width="40px" src="https://vlibras.gov.br/app/assets/component-ac.png">
                            </a>
                        </li>
        
                        <li class="header-list-accessibility">
                            <a type="button" id="shortcuts-btn" href="#"> 
                                <img alt="Clique nesta imagem para exibir um modal com a lista de atalhos da aplicação" width="40px" src="https://www.flaticon.com/premium-icon/icons/svg/668/668286.svg">
                            </a>
                        </li>
        
                        <li class="header-list-accessibility">
                            <button aria-label="Clique neste ícone para alterar a aplicação para o modo CLARO" type="button" id="contrast-dot-white" href="#"> </button>
                        </li>
        
                        <li class="header-list-accessibility">
                            <button aria-label="Clique neste ícone para alterar a aplicação para o modo ESCURO" type="button" id="contrast-dot-black" href="#"> </button>
                        </li>
        
                        <li class="header-list-accessibility">
                            <a type="button" id="shortcut-job" href="#" class="header-link contrast" data-contrast-dark='{"font": "#fff"}' data-contrast-light='{"font": "white"}'> 
                                [Vagas ALT+J]
                            </a>
                        </li>
                    </ul>
                </div>

            </ul>

            <ul class="navbar-nav">
                
                <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href=""><i class="fa fa-briefcase" aria-hidden="true"></i> Vagas </a> </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark contrast-font" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="round contrast-font">{{substr('Wendel',0,1)}}</span> <span class="profile-status online pull-right"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img">
                                        <span class="round">{{substr('Wendel',0,1)}}</span> <span class="profile-status online pull-right"></span>

                                    </div>
                                    <div class="u-text">
                                        <h4>Wendel</h4>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href=""><i class="mdi mdi-account"></i> Meu perfil</a></li>
                            <li><a href=""><i class="mdi mdi-email-outline"></i> Minhas candidaturas</a></li>
                            <li><a href=""><i class="mdi mdi-power"></i> Logout</a></li>
                        </ul>
                    </div>
                </li>
            
            </ul>
        </div>
    </nav>
</header>

<div id="shortcuts-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="danger-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-primary">
                <h4 style="color: white;" class="modal-title" id="danger-header-modalLabel">LISTA DE ATALHOS: <strong> <span id="contact_requested_email"></span> </strong> </h4>
                <button aria-label="Fechar modal" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <h3 class="mt-0">Para navegar de forma mais prática, você pode usar os atalhos</h5>

                <div style="padding: 1.5%">
                    <h6>- ALT + J : Redireciona para a página de busca de vagas</h6>
                    <h6>- ALT + U : Redireciona para a página de adminitração do perfil (Em desenvolvimento)</h6>
                </div>
                        
            </div>
            <div class="modal-footer">
                <button aria-label="Fechar modal" style="color: white; background-color: rgb(42, 42, 42);" type="button" class="btn btn-light" data-dismiss="modal">FECHAR</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    
    <script>
        $('#shortcuts-btn').on('click', function(e) {
            
            $('#shortcuts-modal').modal('show');

        });
    </script>

@endpush