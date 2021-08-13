<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>

<body>
    <?php require 'views/header.php'; ?>
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-9">
                <div class="contenido">

                    <div class="principal principal_flex">
                        <div class="perfil">
                            <?php
                            $datos_desc = $this->descripcion[0];
                            if ($datos_desc["descripcion"] != NULL) {
                                $desc_desc = $datos_desc["descripcion"];
                            } else {
                                $desc_desc = "Cuenta quien eres";
                            }
                            echo "<h3 class='centro'> Hola " . $datos_desc["nombre_usuario"] . "</h3>";
                            ?>
                            <hr>
                            <h3 class="tit_desc">Sobre mí</h3>
                            <button class="editar_desc"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </button>
                            <div class="desc"><?php echo $desc_desc; ?></div>
                            <form action="<?php echo constant('URL'); ?>Perfil/edit_desc" method="POST">
                                <textarea name="descripcion" class="descripcion_t_a" placeholder="Descripción"></textarea>
                                <button class="boton_desc_cerrar">Cerrar</button>
                                <button class="boton_desc_guardar" type="submit">Guardar</button>
                            </form>

                            <hr>
                            
                            <h3 class="titulo_publicaciones">Tus Publicaciones</h3> 
                            <button class="mostrar_publicaciones">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                </svg>
                            </button>
                            <button class="ocultar_publicaciones">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                                <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                                </svg>
                            </button>
                            
                            <?php 
                            if ($this->pub_usu!=NULL) {
                                $pub_usu = $this->pub_usu;
                                foreach ($pub_usu as $fila => $datos_pub) {
                            ?>                    

                            <div class="publicacion_usuario">
                                <a href="<?php echo constant('URL').'publicacion?id='.$datos_pub['id_pub']; ?>" ><p class="pub_titulo"><?php echo $datos_pub['titulo'] ?></p></a>
                                <p><?php echo $datos_pub['fecha_pub']; ?></p>
                                <hr>
                            </div>
                            
                            <?php }    } else{?>
                                <h4 class="text-center publicacion_usuario">No Tienes Publicaciones</h4>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-3">
                <div class="con_seg_1">
                    <p class="comentario_hacer_publicacion">Comparte tu contenido con la comunidad!</p>
                    <a href="<?php echo constant('URL'); ?>Publicar"><button class="boton_hacer_publicacion">hacer una publicación</button></a>
                </div>

                <div class="con_seg_2">
                    
                    <ul class="ul_publicaciones">
                        <h4 class="text-center">Explora</h4>
                        <?php
                        $publi_lat = $this->pub_lat;
                        foreach ($publi_lat as $key => $value) {

                            foreach ($value as $var_key) {
                                echo '<div class="elemento_pub_nav"><a href="'.constant('URL').'publicacion?id='.$var_key['id_pub'].'" ><p class="pub_titulo">'.$var_key['titulo'].'</p></a>';
                                echo "<p class='usuario_nav'><i>".$var_key['nombre_usuario'] . "</i></p>";
                                echo "<p class='fecha_nav'>".$var_key['fecha_pub'] . "</p></div><hr>";
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
    <?php require 'views/footer.php';?>
    <script src="<?php echo constant('URL'); ?>public/js/perfil.js"></script>
</body>

</html>