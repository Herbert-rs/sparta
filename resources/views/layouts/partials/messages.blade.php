@if (Session::has('success-message'))
    <div class="alert alert-success"> {{ Session::pull('success-message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
@endif
@if (Session::has('error-message'))
    <div class="alert alert-danger"> {{ Session::pull('error-message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    </div>
@endif

{{-- Custom messages --}}
@if (Session::has('removeContactError'))
    <div class="alert alert-danger" role="alert">
        <i class="fa fa-exclamation-circle" aria-hidden="true"></i> <strong> {{ session('removeContactError') }} </strong> 
    </div>
@endif

@if (Session::has('removeContactSuccess'))
    <div class="alert alert-success" role="alert">
        <i class="fa fa-check" aria-hidden="true"></i> <strong>{{ session('removeContactSuccess') }}</strong> 
    </div>
@endif

@if (Session::has('updateContactError'))
    <div class="alert alert-danger" role="alert">
        <i class="fa fa-exclamation-circle" aria-hidden="true"></i> <strong> {{ session('updateContactError') }} </strong> 
    </div>
@endif

@if (Session::has('updateContactSuccess'))
    <div class="alert alert-success" role="alert">
        <i class="fa fa-check" aria-hidden="true"></i> <strong>{{ session('updateContactSuccess') }}</strong> 
    </div>
@endif