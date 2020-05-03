@include('auth.partials.header')
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(/img/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">                    
                    @if (session('errorMessage'))
                        <div class="alert alert-danger">
                            {{ session('errorMessage') }}
                        </div>
                    @endif
                    <form method="POST"  class="form-horizontal form-material" id="loginform"  action="{{ route('internal',$contact_id) }}">
                        @csrf
                        <input id="internal" type="hidden" name="internal" value="true">
                        <h3 class="box-title m-b-20">Login</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control{{ $errors->has('login') ? ' is-invalid' : '' }}" id="login" type="text" name="login"  required autofocus placeholder="Login"> 
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" required="" id="password" name="password" placeholder="Senha"> 
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Entrar</button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
@include('auth.partials.footer')
