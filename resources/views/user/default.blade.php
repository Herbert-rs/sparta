@include('layouts.header')
    <body class="fix-header fix-sidebar card-no-border">

        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>

        <div id="main-wrapper">

            <div class="page-wrapper" style="background-image:url();">
    
                @include('layouts.navbar')
                @include('layouts.sidebar')

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
                
                @yield('content-fluid')
            
            </div>
            

        </div>

        @include('accessibility.vlibras')

    @include('layouts.partials.js')

    </body>

@include('layouts.footer')