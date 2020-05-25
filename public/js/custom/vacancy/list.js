document.addEventListener('DOMContentLoaded', function() {
    
    var vacancies = document.querySelectorAll('.sendCandidature');
    
    vacancies.forEach(function(vacancy){
        
        vacancy.addEventListener('click', function(e){
            setCandidature(this);
        });

    });

    function setCandidature(element)
    {
        var p = document.createElement("h5");
        var message = document.createTextNode("Você se candidatou para essa vaga");
        p.appendChild(message);
        p.classList.add('success-message');

        var parent = element.parentNode;
        parent.appendChild(p);
        element.parentNode.removeChild(element);
        toastr.success('Candidatura enviada para a vaga: '+element.getAttribute('data-vacancy-title'), 'Enviado com sucesso')
    }

});