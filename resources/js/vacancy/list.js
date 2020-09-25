const axios = require('axios');
import Swal from 'sweetalert2'

document.addEventListener('DOMContentLoaded', function() {
    
    var vacancies = document.querySelectorAll('.sendCandidature');
    
    vacancies.forEach(function(vacancy){
        
        vacancy.addEventListener('click', function(e){
            setCandidature(this);
        });

    });

    function setCandidature(element)
    {

        var vacancy_id = element.getAttribute('data-vacancy-id');

        axios.get(`http://localhost:800/vacancy/set/candidature/${vacancy_id}`)
        .then(resp => {

            if(resp.data.status != 200){
                toastr.info(resp.data.message);
                return false;
            }

            var p = document.createElement("h5");
            var message = document.createTextNode(resp.data.message);
            p.appendChild(message);
            p.classList.add('success-message');
    
            var parent = element.parentNode;
            parent.appendChild(p);
            element.parentNode.removeChild(element);
            toastr.success('Candidatura enviada para a vaga: '+element.getAttribute('data-vacancy-title'), 'Enviado com sucesso')

        }).catch(error => {

            if (error.response) {

                if(error.response.status == 401){ // Não autorizado
                    
                    Swal.fire({
                        title: 'Não autenticado',
                        text: 'Acesse ou se cadastre para enviar sua candidatura',
                        icon: 'warning',
                        confirmButtonText: 'Ir para login'
                    }).then( (response) => {
                        
                        if(response.isConfirmed){
                            window.location.href = "/candidate/sign_up";
                        }

                    });
                }

            }

        });
    }

});