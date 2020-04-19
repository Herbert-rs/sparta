@extends('default')
@section('title')
    @include('layouts.partials.title',['title' => "Meu Perfil"])
@stop
@include('layouts.partials.form')
@section('content-fluid')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0"><i class="mdi mdi-account-card-details"></i> Meu Perfil</h4>
                </div>
                {!! Form::open(['route' => ['myprofile.update'],'method' => 'post', 'class' => 'form', 'id' => 'form']) !!}
                    <div class="card-body border-top collapse show table-responsive no-wrap">
                        <div class="form-body">
                            @include('myprofile.partials.form')
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Salvar</button>
                            <a href="{{ route('home') }}" class="btn btn-inverse" role="button"> <i class="fas fa-times" aria-hidden="true"></i> Cancel</a>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@stop

@push('scripts')

@endpush
