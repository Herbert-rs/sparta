$(function() {

    $('#search_mail_code').on("click", function() {

        var mailCodeField       = $('input[name="building[bmail_code]"]');
        var typeField           = $('input[name="building[bstreet_type]"]');
        var cityField           = $('input[name="building[bcity]"]');
        var stateField          = $('input[name="building[bstate]"]');
        var addressLineField    = $('input[name="building[bstreet_name]"]');
        var numberField         = $('input[name="building[bstreet_number]"]');
        var suffixField         = $('input[name="building[building_suffix]"]');

        if( mailCodeField.val().length <= 0 ){
            swal({     
                text: "Digite um CEP válido",   
                type: "warning",   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Ok"
            });

            clearFields(mailCodeField, typeField, cityField, stateField ,addressLineField, numberField, suffixField);
            return false;
        }
        searchMailCodeBuilding(mailCodeField, typeField, cityField, stateField ,addressLineField, numberField, suffixField);

        
    });

});

function loading(show) {

    if (show === false) {
        $('#searchMailCode').removeClass('fas fa-spinner fa-spin').addClass('fa fa-search');
        return;
    }

    $('#searchMailCode').removeClass('fa fa-search').addClass('fas fa-spinner fa-spin');

}

function searchMailCodeBuilding(mailCodeField, typeField, cityField, stateField ,addressLineField, numberField, suffixField) 
{
    loading(true);

    var val = mailCodeField.val();
    var url = '/building/searchExternalCep/'+val;
    $.ajaxSetup({
        url: url,
        crossDomain: true,
        dataType: 'json',
    });

    $.ajax({
    success: function(data) {
        if (data.resultado == 1) {
            typeField.attr("readonly", true);
            typeField.val(unescape(data.tipo_logradouro));
            cityField.val(unescape(data.cidade));
            stateField.val(unescape(data.uf));
            addressLineField.val(unescape(data.logradouro));
            addressLineField.attr("readonly", true); 
        } 
        else if (data.resultado == 2) {
            typeField.attr("readonly", false);
            cityField.val(unescape(data.cidade));
            stateField.val(unescape(data.uf));
            addressLineField.attr("readonly", false); 
        }
        else {
            swal({     
                text: "Não encontramos informações sobre o CEP digitado",   
                type: "warning",   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Ok"
            });
            
            clearFields(mailCodeField, typeField, cityField, stateField ,addressLineField, numberField, suffixField);              
        }
        loading(false);
    }
    });
}

function clearFields(mailCodeField, typeField, cityField, stateField ,addressLineField, numberField, suffixField)
{

    typeField.attr("readonly", true);
    typeField.val('');
    cityField.val('');
    stateField.val('');
    addressLineField.val('');
    numberField.val('');
    suffixField.val('');
    addressLineField.attr("readonly", true); 

}