<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header d-none d-sm-block">
            <a class="navbar-brand" href="{{route('home')}}">
                <img width="40" height="40" src="/img/logo_branco.png" class="light-logo" alt="homepage" />
                <span style="">
                    <img height="33" src="/img/nome_branco.png" class="light-logo" alt="homepage" />
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
                <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
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
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="d-none d-sm-block">
                            <b>{!! $current_customer->name !!}</b>
                                @if($current_role)
                                    <span class="label-role">{{ $current_role->label }}</span>
                                @endif
                            <i class="mdi mdi-chevron-down"></i>
                        </i>
                        <i class="d-block d-sm-none">
                            <b>{!! substr($current_customer->name,0,15) !!}</b>
                                @if($current_role)
                                    <span class="label-role">{{ $current_role->label }}</span>
                                @endif
                            <i class="mdi mdi-chevron-down"></i>
                        </i>
                    </a>
                    <div class="dropdown-menu scale-up-left">
                        <ul class="mega-dropdown-menu row">
                            <li class="col-12 m-b-120">
                                <h4 class="m-b-20">Lista de clientes</h4>
                                @include('customer.partials.select')
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
                <!-- Comment -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Comment -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->
                @if(!$isInternalUserLogged)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="notificationBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onClick="javascript:updateDate({!! $notificationCount !!})"> <i class="mdi mdi-email"></i>
                            @if($notificationCount > 0)
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            @endif
                        </a>
                        <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                            <ul>
                                <li>
                                    <div class="drop-title">Você  tem {!! $notificationCount !!} novas mensagens</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        @foreach($listContactNotification as $notification)
                                            <!-- Message -->
                                            <a href="{!! route('message.show',$notification->id,$notification->id) !!}">
                                                <div class="user-img"> <span class="glyphicon glyph{!! $notification->icon_class !!}"></span></div>
                                                <div class="mail-contnet">
                                                    <h5>{!! replaceParams($notification->subject,$notification->params) !!}</h5> <span class="mail-desc">{!! $notification->description !!}/span> <span class="time">{!! format_date($notification->send_date) !!}</span> </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="{{route('message.list')}}"> <strong>Ver todas as mensagens</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Profile -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="round">{{substr($user_data->name,0,1)}}</span> <span class="profile-status online pull-right"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img">
                                        <span class="round">{{substr($user_data->name,0,1)}}</span> <span class="profile-status online pull-right"></span>

                                    </div>
                                    <div class="u-text">
                                        <h4>{!! $user_data->name !!}</h4>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('myprofile') }}"><i class="mdi mdi-account"></i> Meu perfil</a></li>
                            <li><a href="{!! route('myprofile.invites.list') !!}"><i class="mdi mdi-email-outline"></i> Meus convites</a></li>
                            <li><a href="#"><i class="mdi mdi-history"></i> Meu histórico</a></li>
                            <li><a href="{!! route('logout') !!}"><i class="mdi mdi-power"></i> Logout</a></li>
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
@push('scripts')
<script src="/js/custom/modules/notification/notification.js"></script>

@endpush
