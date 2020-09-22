<script src="/js/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="/js/popper/popper.min.js"></script>
<script src="/js/bootstrap/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="/js/jquery/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="/js/waves/waves.js"></script>
<!--Menu sidebar -->
<script src="/js/sidebar/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="/js/sticky/sticky-kit.min.js"></script>
<script src="/js/jquery/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="/js/adminlte/custom.min.js"></script>

{{-- ## Feramentas de acessibilidade --}}

{{-- VLibras --}}
<script src="/js/vlibras/vlibras-plugin.js"></script>
<script src="/js/vlibras/launcher.js"></script>

{{-- Mouse Trap --}}
<script src="/js/mousetrap/mousetrap.min.js"></script>
<script src="/js/mousetrap/mousetrap-shortcuts.js"></script>

{{-- Contrast --}}
<script src="/js/contrast/contrast.js"></script>

@toastr_js
@toastr_render


<script type="text/javascript" src="{{asset('js/accessibility-package.js')}}"></script>

<script>
    window.addEventListener('load', function() {
        var labels = {
            menuTitle: 'Acessibilidade',
            increaseText: 'Aumentar tamanho do texto',
            decreaseText: 'Diminuir tamanho do texto',
            increaseTextSpacing: 'Aumentar espaçamento do texto',
            decreaseTextSpacing: 'Diminuir espaçamento do texto',
            invertColors: 'Inverter cores',
            grayHues: 'Tons de cinza',
            underlineLinks: 'Sublinhar links',
            bigCursor: 'Cursor grande',
            readingGuide: 'Guia de leitura',
            textToSpeech: 'Texto > Fala',
            speechToText: 'Fala > Texto'
        };

        var icon = {
            position: {
                // left: { size: 0.5, units: '%' },
                top: { size: 80, units: '%' },
                bottom: { size: 20, units: 'px' },
                left: { size: 0.5, units: '%' },
                type: 'fixed'
            }
        };

        var options_access = { labels: labels, icon: icon };
        options_access.textToSpeechLang = 'pt-BR'; // or any other language
        options_access.speechToTextLang = 'pt-BR'; // or any other language
        
        new Accessibility(options_access); 
    
    }, false);
</script>

@stack ('scripts')