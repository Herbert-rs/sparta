
var btnContrastWhite = document.querySelector('#contrast-dot-white');
btnContrastWhite.addEventListener('click', function(e){
    setContrastLightMode();
});

var btnContrastBlack = document.querySelector('#contrast-dot-black');
btnContrastBlack.addEventListener('click', function(e){
    setContrastDarkMode();
});

function setContrastDarkMode(){
    
    $('.contrast').each(function(index, value) {

        var color = JSON.parse( $(this).attr('data-contrast-dark') );

        if(color.background !== ''){
            $(this).css('background-color', color.background);
        }

        if(color.font !== ''){
            $(this).css('color', color.font);
        }

    });
}

function setContrastLightMode(){

    $('.contrast').each(function(index, value) {

        var color = JSON.parse( $(this).attr('data-contrast-light') );

        if(color.background !== ''){
            $(this).css('background-color', color.background);
        }

        if(color.font !== ''){
            $(this).css('color', color.font);
        }

    });

}

document.addEventListener('DOMContentLoaded', function() {

    setContrastLightMode();

});