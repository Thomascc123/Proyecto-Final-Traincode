$(document).ready(function(){

    $('#op_1').click(function(){
        $('html, body').animate({
            scrollTop: $('#t_integrantes').offset().top
        }, 100);
            
    })

    $('#op_2').click(function(){
        $('html, body').animate({
            scrollTop: $('#t_logo').offset().top
        }, 100);
            
    })

    $('#op_3').click(function(){
        $('html, body').animate({
            scrollTop: $('#t_objetivos').offset().top
        }, 100);
            
    })

    $('#op_4').click(function(){
        $('html, body').animate({
            scrollTop: $('#t_contenidos').offset().top
        }, 100);
            
    })

})