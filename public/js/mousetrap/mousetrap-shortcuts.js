document.addEventListener('DOMContentLoaded', function() {
    
    //Go to: User page
    Mousetrap.bind('alt+u', function(e) {
        window.location.replace("/user");
    });

    //Go to: Jobs page
    Mousetrap.bind('alt+j', function(e) {
        window.location.replace("/vacancies");
    });

 }, false);

 document.querySelector('#shortcut-index').addEventListener('click', function(e){
    window.location.replace("/user");
 });

 document.querySelector('#shortcut-job').addEventListener('click', function(e){
    window.location.replace("/vacancies");
 });