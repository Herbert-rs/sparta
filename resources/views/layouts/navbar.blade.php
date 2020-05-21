<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar contrast" data-contrast-dark='{"background": "black", "font": "white"}' data-contrast-light='{"background": "white", "font": "black"}'>
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="">
                <img width="40" height="40" src="https://cineaddiction.com/wp-content/uploads/2018/12/300.jpg" class="light-logo" alt="homepage" />
                <span style="">
                    <img height="33" src="https://cineaddiction.com/wp-content/uploads/2018/12/300.jpg" class="light-logo" alt="homepage" />
                </span>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto mt-md-0">
                <!-- This is -->
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <!--<li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                    <form class="app-search">
                        <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                </li>-->
                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-view-grid"></i></a>
                    <div class="dropdown-menu scale-up-left">
                        <ul class="mega-dropdown-menu row">
                            <li class="col-12 col-md-6 m-b-120">
                                <h4 class="m-b-20">Lista de candidaturas</h4>
                                {{-- @foreach($customer_list as $customer)
                                    <div class="card">

                                        <div class="card-body">
                                            @if($current_customer_id == $customer->customer_id)
                                                <div class="ribbon ribbon-info ribbon-right pull-right">Selecionado</div>
                                            @endif

                                            <h4 class="card-title">{!! $customer->name !!}
                                                @if($current_customer_id <> $customer->customer_id)
                                                    <a href="#" class="btn btn-sm btn-success pull-right">Selecionar</a>
                                                @endif
                                            </h4>
                                            <h6 class="card-subtitle mb-2 text-muted">{!! $customer->fantasy_name !!}</h6>
                                        </div>
                                    </div>
                                @endforeach --}}
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav">
                <!-- ============================================================== -->
                <!-- Profile -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark contrast-font" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="round contrast-font">{{substr('SPARTANOS',0,1)}}</span> <span class="profile-status online pull-right"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img">
                                        <span class="round">{{substr('SPARTANOS',0,1)}}</span> <span class="profile-status online pull-right"></span>

                                    </div>
                                    <div class="u-text">
                                        <h4>SPARTANOS</h4>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href=""><i class="mdi mdi-account"></i> Meu perfil</a></li>
                            <li><a href=""><i class="mdi mdi-email-outline"></i> Meus convites</a></li>
                            <li><a href="#"><i class="mdi mdi-history"></i> Meu histórico</a></li>
                            <li><a href=""><i class="mdi mdi-power"></i> Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
