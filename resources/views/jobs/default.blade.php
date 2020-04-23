<div class="page-wrapper" style="background-image:url();">
    
    @include('layouts.navbar')
    <style type="text/css">
        .page-wrapper{
            margin-left: 0px;
        }
    </style>

    @yield('content-fluid')

    @include('layouts.footer')

</div>