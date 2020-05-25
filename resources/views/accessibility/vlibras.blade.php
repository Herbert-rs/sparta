<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>

@push('scripts')
    
    <script>
    
        document.addEventListener('DOMContentLoaded', function() {

            setTimeout(function(){ 

                var element = document.querySelector('[vw-access-button]');    
                var childrenAcessButton = element.querySelector('.access-button');
                var childrenPopUp = element.querySelector('.pop-up');
                childrenAcessButton.setAttribute('alt', 'Imagem de acesso ao VLibras');
                childrenPopUp.setAttribute('alt', 'Pop up de acesso ao VLibras');

            }, 3000);

        }); 
    
    </script>

@endpush