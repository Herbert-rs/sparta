@include('auth.partials.header')
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(/img/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                        <div class="alert alert-success">
                            {{ __('Email enviado com sucesso') }}<br><br>
                            {{ __('Antes de prosseguir, abra sua caixa de email para visualizar o endereço de verificação.') }}
                        </div>
                </div>
            </div>
        </div>
    </section>
@include('auth.partials.footer')
