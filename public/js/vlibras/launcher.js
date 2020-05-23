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


var vlibrasButton = document.querySelector('#vlibras-button');

vlibrasButton.addEventListener('click', function(e){
    var vlibrasLauncher = document.querySelector('[vw-access-button]');
    vlibrasLauncher.dispatchEvent(new Event("click"));
});