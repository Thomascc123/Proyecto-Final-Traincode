$(document).ready(function(){

    // Editar Descripción
    $(".descripcion_t_a").hide();
    $(".boton_desc_cerrar").hide();
    $(".boton_desc_guardar").hide();

    $(".editar_desc").on('click', function() {
        $(".editar_desc").hide();
        $(".desc").hide();
        $(".descripcion_t_a").show();
        $(".boton_desc_cerrar").show();
        $(".boton_desc_guardar").show();
        return false;
    });

    $(".boton_desc_cerrar").on('click', function() {
        $(".editar_desc").show();
        $(".desc").show();
        $(".descripcion_t_a").hide();
        $(".boton_desc_cerrar").hide();
        $(".boton_desc_guardar").hide();
        $(".descripcion_t_a").val('');
        return false;
    });

    //mostrar y ocultar publicaciones

    $(".ocultar_publicaciones").hide();
    $(".publicacion_usuario").hide();

    $(".mostrar_publicaciones").on('click', function() {
        $(".mostrar_publicaciones").hide();
        $(".ocultar_publicaciones").show();
        $(".publicacion_usuario").show();
        return false;
    });

    $(".ocultar_publicaciones").on('click', function() {
        $(".mostrar_publicaciones").show();
        $(".ocultar_publicaciones").hide();
        $(".publicacion_usuario").hide();;
        return false;
    });

});