@include('layouts.header')
    <body class="fix-header fix-sidebar card-no-border">

        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>

        <div id="main-wrapper">

            <div class="page-wrapper" style="background-image:url();">
    
                @include('layouts.navbar')
                <style type="text/css">
                    .page-wrapper{
                        margin-left: 0px;
                    }
            
                    @media (min-width: 768px){
                        .footer {
                            left: 0px;
                        }
                    }
            
                </style>
            
                @if( userRoute() )
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="row justify-content-center">
                                    <div class="col-md-2">
                                        <a style="padding: 1rem; color: #505658;" class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="{{ route('vancancy.list') }}"><i class="fas fa-briefcase"></i> Dashboard </a>
                                    </div>

                                    <div class="col-md-2">
                                        <a style="padding: 1rem; color: #505658;" class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="{{ route('vancancy.list') }}"><i class="fas fa-briefcase"></i> Dashboard </a>
                                    </div>

                                    <div class="col-md-2">
                                        <a style="padding: 1rem; color: #505658;" class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="{{ route('vancancy.list') }}"><i class="fas fa-briefcase"></i> Dashboard </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-main">
                        @yield('content-fluid')
                    </div>

                @else
                    @yield('content-fluid')
                @endif 
            
            </div>
            

        </div>

        @include('accessibility.vlibras')

    @include('layouts.partials.js')

    </body>

@include('layouts.footer')