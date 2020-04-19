
function search_zip_code(zipcode,rua,cidade,uf) {

    //Nova variável "cep" somente com dígitos.
    var cep = $(zipcode).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {

            rua.val("...");
            cidade.val("...");
            uf.val("...");
            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    var street = dados.logradouro.replace(/\d/g, '');

                    let buildings = [
                        'RUA',
                        'AVENIDA',
                        'ACESSO',
                        'ALAMEDA',
                        'BECO',
                        'CAMINHO',
                        'CONDOMINIO',
                        'ESTRADA',
                        'ESTRADA MUNICIPAL',
                        'ILHA',
                        'LADEIRA',
                        'LARGO',
                        'LOTEAMENTO',
                        'PASSAGEM',
                        'PASSEIO',
                        'PRACA',
                        'PRAIA',
                        'QUADRA',
                        'RODOVIA',
                        'RUA PROJETADA',
                        'SERVIDAO',
                        'TRAVESSA',
                        'VIA',
                        'VIA DE ACESSO',
                        'VIA DE PEDESTRE',
                        'VIADUTO',
                        'VIELA',
                        'VILA'
                    ];

                    for (const key in buildings) {

                        var string = new RegExp(buildings[key], 'ig')
                        var result = street.match(string);
                        if (string.test(result)) {
                            var street =  street.replace(string, "");
                        }
                    }

                    rua.val(street);
                    cidade.val(dados.localidade);
                    uf.val(dados.uf);
                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.

                    alert("CEP não encontrado.");
                }
            });
        } //end if.
        else {
            //cep é inválido.

            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
    }
}