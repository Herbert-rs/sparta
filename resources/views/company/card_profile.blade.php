<div class="card"> 
    <img src="{{ asset('img/background/profile-bg.jpg') }}" alt="Card image cap" class="profile-bg-height  w-100 rounded-top">
    <div class="card-body little-profile text-center">
        <div class="pro-img"><img src="{{ asset( 'storage/'.$data->avatar ) }}" alt="user" class="rounded-circle shadow-sm" width="128"></div>
        <h3 class="mb-0"> {{ isset($data->name) ? $data->name : '' }} </h3>
        <p> <center>Perfil Atualizado em: {{ isset($data->updated_at) ? format_datehour($data->updated_at) : '' }} </center></p>
        <p> Descrição do perfil: {{ isset($data->description) ? $data->description : '' }} </p>
        <div class="row text-center mt-3 justify-content-center">
            <div class="col-6 col-md-6 mt-3">
                <h3 class="mb-0 font-weight-light">1099</h3><small>Vagas ativas</small>
            </div>
            <div class="col-6 col-md-6 mt-3">
                <h3 class="mb-0 font-weight-light">{{ isset($data->created_at) ? format_date($data->created_at) : '' }}</h3><small>Membro desde</small>
            </div>
        </div>
    </div>
</div>