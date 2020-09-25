@extends('default')
@section('content-fluid')
    
<div class="row">
    <div class="col-lg-12">
        <div class="card" style="min-height: 500px">
            <div class="card-header">
                <h4 class="card-title mb-0"><i class="mdi mdi-account-card-details"></i> {{ isset($title) ? $title : '' }}</h4>
            </div>
            <div class="card-body border-top collapse show table-responsive no-wrap">
                @yield('content-user')
            </div>
        </div>
    </div>
</div>
@stop
