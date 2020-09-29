@extends('user.default', ['title' => 'Meu perfil'])
@section('content-user')

    <form method="post" enctype="multipart/form-data" action="{{ route('user.profile.update') }}">
        @csrf
        <div class="row">
            <div class="col-lg-4">
                @include('candidate.card_profile', ['data' => $data])
            </div>

            <div class="col-lg-8">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            @include('candidate.form', ['data' => $data])
                        </div>
                        <div class="col-lg-6">
                            @include('candidate.form_additional', ['data' => $data])
                        </div>
                    </div>

                    <div class="form-group btn-container">
                        <center>
                            <button class="btn btn-primary btn-block" type="submit" style="width: 30rem;"><i class="fa fa-sign-in fa-lg fa-fw"></i>Atualizar perfil</button>
                        </center>
                    </div>
                </div>
            </div>

        </div>

    </form>
@stop
