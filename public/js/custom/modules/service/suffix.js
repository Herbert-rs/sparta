

function saveSuffix(service_id) 
{
        var idCampo='desc_suffix_'+service_id;
        suffixValue=document.getElementById(idCampo).value;
       $.post('/service/' + service_id + '/suffix/?suffix='+suffixValue, function(data) 
        {
            var idDivStatus='status_'+service_id;
            
            statusAtualizacao=document.getElementById(idDivStatus);
            statusAtualizacao.innerHTML='<span class="label label-success" style="padding:2px;">'+data+'</span>';
        });
}