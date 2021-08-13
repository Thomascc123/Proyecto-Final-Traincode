$(document).ready(function(){
    //mostrar solucion
    $("#ocultar").hide();
    $("#element_solucion").hide();

    $("#ocultar").on('click', function() {
        $("#element_solucion").hide();
        $("#ocultar").hide();
        $("#mostrar").show();
        return false;
    });
 
    $("#mostrar").on('click', function() {
        $("#element_solucion").show();
        $("#ocultar").show();
        $("#mostrar").hide();
        return false;
    });
    //añadir codigo de comentario
    $('form').on('submit',function(e){
        $('#code').val($(this).find("#coment_codigo").html());
    })
    //botones_respuesta
    $(".vista_comentario").each(function() {
        $(this).find(".respuestas").parent().prepend(`<button class="mostrar_respuestas_boton">Mostrar Respuestas</button>
        <button class="ocultar_respuestas_boton">Oculutar Respuestas</button>`);
        console.log("funciona")
    });
    //añadir y quitar campo de codigo
    $("#coment_codigo").hide();
    $(".boton_cerrar_codigo").hide();
    

    $(".boton_codigo").on('click', function(){
        $("#coment_codigo").show();
        $(".boton_cerrar_codigo").show();
        $(".boton_codigo").hide();
        return false;
    })

    $(".boton_cerrar_codigo").on('click', function(){
        $("#coment_codigo").hide();
        $(".boton_cerrar_codigo").hide();
        $(".boton_codigo").show();
        $("#coment_codigo").empty();
        return false;
    })
    //Borrar comentario
    $(".boton_borrar_coment").click(function(event) {
        $(this).parent().find("#coment_codigo").empty();
        $(this).parent().find('.coment_area').val('');
    });

    //añadir codigo de respuesta
    $('form').on('submit',function(e){
        $(this).parent().find('.resp_code').val($(this).find(".resp_codigo_coment").html());
        console.log("hola");
    })
    //mostrar y ocultar codigo de respuesta
    $(".responder").hide();
    $(".resp_codigo_coment").hide();
    $(".cerrar_codigo_resp").hide();
    $(".cancelar_resp_boton").hide();
    $(".sub_cancelar_resp_boton").hide();
/*
    $(".responder_boton").on('click', function(){
        $(this).parent().find(".responder").show();
        $(this).parent().find(".cancelar_resp_boton").show();
        $(this).parent().find(".responder_boton").hide();
        return false;
    })

    $(".cancelar_resp_boton").on('click', function(){
        $(this).parent().find(".responder_boton").show();
        $(this).parent().find(".cancelar_resp_boton").hide();
        $(this).parent().find(".responder").hide();
        return false;
    })

    $(".sub_responder_boton").on('click', function(){
        $(this).parents(".vista_comentario").find(".responder").show();
        $(this).parents(".vista_comentario").find(".sub_cancelar_resp_boton").show();
        $(this).parents(".vista_comentario").find(".sub_responder_boton").hide();
        return false;
    })

    $(".sub_cancelar_resp_boton").on('click', function(){
        $(this).parents(".vista_comentario").find(".sub_responder_boton").show();
        $(this).parents(".vista_comentario").find(".sub_cancelar_resp_boton").hide();
        $(this).parents(".vista_comentario").find(".responder").hide();
        return false;
    })
*/
$(".responder_boton").on('click', function(){
    $(this).parents(".vista_comentario").find(".responder").show();
    $(this).parents(".vista_comentario").find(".cancelar_resp_boton").show();
    $(this).parents(".vista_comentario").find(".responder_boton").hide();
    return false;
})

$(".cancelar_resp_boton").on('click', function(){
    $(this).parents(".vista_comentario").find(".responder_boton").show();
    $(this).parents(".vista_comentario").find(".cancelar_resp_boton").hide();
    $(this).parents(".vista_comentario").find(".responder").hide();
    return false;
})

    $(".add_code_resp").on('click', function(){
        $(this).parent().find(".resp_codigo_coment").show();
        $(this).parent().find(".cerrar_codigo_resp").show();
        $(this).parent().find(".add_code_resp").hide();
        return false;
    })
    
    $(".cerrar_codigo_resp").on('click', function(){
        $(this).parent().find(".cerrar_codigo_resp").hide();
        $(this).parent().find(".resp_codigo_coment").hide();
        $(this).parent().find(".add_code_resp").show();
        $(this).parent().find(".resp_codigo_coment").empty();
        return false;
    })
    //borrar contenido de la respuesta
    $(".borrar_respuesta").click(function(event) {
        $(this).parent().find(".resp_codigo_coment").empty();
        $(this).parent().find('.coment_respuesta').val('');
    });
    //mostrar y ocultar comentarios
    $(".respuestas").hide();
    $(".ocultar_respuestas_boton").hide();

    $(".mostrar_respuestas_boton").on('click', function(){
        $(this).parent().find(".mostrar_respuestas_boton").hide();
        $(this).parent().find(".respuestas").show();
        console.log($(this).parent().find(".respuestas"));
        $(this).parent().find(".ocultar_respuestas_boton").show();
        return false;
    })
    $(".ocultar_respuestas_boton").on('click', function(){
        $(this).parent().find(".mostrar_respuestas_boton").show();
        $(this).parent().find(".respuestas").hide();
        $(this).parent().find(".ocultar_respuestas_boton").hide();
        return false;
    })
});