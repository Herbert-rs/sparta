document.addEventListener('DOMContentLoaded', function() {

    if($.fn.dataTable) {
        $.extend(true, $.fn.dataTable.defaults, {
            "lengthChange": false,
            "pageLength": 20,
        });
    }

    // Ferramentas de acessibilidade
    new window.VLibras.Widget('https://vlibras.gov.br/app');

}, false);