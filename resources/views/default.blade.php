@include('layouts.header')
<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    @if(app()->environment()=='production')
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
    @endif
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        {{-- @if(isset($no_customer) && $no_customer == true) --}}
            @include('layouts.navbar_no_customer')
            <style type="text/css">
                .page-wrapper{
                    margin-left: 0px;
                }
            </style>
{{--         @else
            @if($current_customer_id)
                @include('layouts.navbar')
                @include('layouts.sidebar')
            @else
                @include('layouts.navbar_no_customer')
                <style type="text/css">
                    .page-wrapper{
                        margin-left: 0px;
                    }
                </style>
            @endif
        @endif
 --}}
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="background-image:url(/img/background/white_pattern.png);">
            <div class="container-fluid">
                <div class="row page-titles d-none d-sm-block" name="top">
                    <div class="col-md-12 col-8 align-self-center">
                        {{-- {{ Breadcrumbs::render() }} --}}
                    </div>
                </div>

                @include('layouts.partials.messages')

                @yield('content-fluid')

            </div>
            @include('layouts.footer')
        </div>

        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
@include('layouts.partials.js')
</body>

</html>
