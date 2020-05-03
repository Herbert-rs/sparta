@include('auth.partials.header')
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(/img/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    
                    @if (session('errorMessage'))
                        <div class="alert alert-danger">
                            {{ session('errorMessage') }}
                        </div>
                    @endif
                    <form method="POST"  class="form-horizontal form-material" id="loginform"  action="{{ route('password.update') }}">
                        @csrf
                        <input id="token" type="hidden" name="token" value="{{$token}}"> 
                        <h3 class="box-title m-b-20">Redefinir</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" type="email" name="email"  required autofocus placeholder="E-Mail"> 
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
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
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" type="password" required="" id="password_confirmation" name="password_confirmation" placeholder="Confirmar Senha"> 
                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Enviar</button>
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