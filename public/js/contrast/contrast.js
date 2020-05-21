
function setContrastDarkMode(){
    
    $('.contrast').each(function(index, value) {

        var color = JSON.parse( $(this).attr('data-contrast-dark') );
        $(this).css('background-color', color.background);
        $(this).css('color', color.font);

    });
}

function setContrastLightMode(){

    $('.contrast').each(function(index, value) {

        var color = JSON.parse( $(this).attr('data-contrast-light') );
        $(this).css('background-color', color.background);
        $(this).css('color', color.font);

    });

}