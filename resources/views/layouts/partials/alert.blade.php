<div class="row">
    <div class="col-12">
        <div class="alert {{ $alertDecoration }}">
            <button type="button" role="button" class="close" data-dismiss="alert" aria-label="Fechar" aria-hidden="true">
                &times;
            </button>
            <i class="fa fa-exclamation-triangle"></i><strong> Atenção!</strong>
            {{ $message ?? Session::pull($alertDecoration) }}
        </div>
    </div>
</div>
