@extends('default')
@section('title')
    @include('layouts.partials.title',['title' => "Contatos"])
@stop
@include('layouts.partials.table')
@section('content-fluid')

	<div class="row">
	    <div class="col-md-12">
	        <div class="card overflow-hidden">
	            <div class="p-4 text-center">

				    <div class="alert alert-danger" role="alert">
				        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <strong> Ops! Não foi possível processar sua requisição. </strong> 
				    </div>					

	            </div>
	        </div>
	    </div>
	</div>

@stop