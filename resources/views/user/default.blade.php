@include('layouts.navbar')
@include('layouts.sidebar')

<div class="page-wrapper" style="background-image:url();">
    <div class="container-fluid">
		<div class="row page-titles d-none d-sm-block" name="top">
		    <div class="col-md-12 col-8 align-self-center">
		        {{-- {{ Breadcrumbs::render() }} --}}
		    </div>
		</div>

		@include('layouts.partials.messages')

		@yield('content-fluid')

		@include('layouts.footer')
	</div>
</div>